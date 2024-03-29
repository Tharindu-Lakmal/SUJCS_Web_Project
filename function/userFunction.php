
<?php include '../connection.php';?>


<?php

@session_start();

function checkReqfields($reqFields){
    $errors = array();
//    we get that array fields one by one
    foreach ($reqFields as $field){

//          we use trim function to check space
        if (empty(trim($_POST[$field]))){

            $errors[] = $field. " is required";
        }
    }
    return $errors;

}

function checkMaxLength($maxLengthFields){
    $errors = array();
    foreach ($maxLengthFields as $field=> $maxLen){

//          we use trim function to avoid space
        if (strlen(trim($_POST[$field]))>$maxLen){

            $errors[] = $field. "must be less than ".$maxLen. " characters";
        }
    }
    return $errors;
}

// function errorDisplay($errors){
//     echo "<div class='errmsg'> ";
//     echo "<b>There were some errors of your form.</b><br>";
//     foreach ($errors as $error){S
//         $error = ucfirst(str_replace("_", " ", $error));
//         echo '- ' . $error . '<br>';
//     }
//     echo " </div> ";

// }


function is_email($email)
{
    return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i" ,$email));
}



function verify_query($resultSet){

    global $connection;

    if (!$resultSet){
        die("Database query failed: ".mysqli_error($connection));

    }

}



function signUp(){

    global $con;

    $errors = array();

    $userName = "";
    $email = ""; 
    $password = "";

//first check submit button press

    if(isset($_POST['submit'])){

        

        $userName = $_POST['user_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

//        check the one by one fields
        $reqFields = array('user_name', 'user_email', 'user_password');
        $errors = array_merge($errors, checkReqfields($reqFields));
//add to arary to array

//      we check require characters
        $maxLengthFields = array('user_name'=>100, 'user_email'=>100, 'user_password'=>100);
        $errors = array_merge($errors, checkMaxLength($maxLengthFields));

//        checking email address
        if (!is_email($_POST['user_email'])){
            $errors[] = 'Email address is invalid.';

        }

//        Checking email address already exit
        $email = mysqli_real_escape_string($con, $_POST['user_email']);
        $query = "SELECT * FROM user WHERE user_email = '{$email}' ";

        $resultSet = mysqli_query($con, $query);

        if ($resultSet){
            if (mysqli_num_rows($resultSet) == 1){
                $errors[] = 'email address already exist';
            }
        }

//        REGISTER USER
        if (empty($errors)){
//            no errors found ...adding new records
            $userName = mysqli_real_escape_string($con, $_POST['user_name']);
            $password = mysqli_real_escape_string($con, $_POST['user_password']);

//            All are sanitized....using above function to sanitized
            $hashPassword = sha1($password);

//            $query = "INSERT INTO user (first_name, last_name, email, password, is_deleted) ";
//            $query .= "VALUES ('$first_name', '$last_name', '$last_name', '$email', '$hashPassword', 0)";
            $query = "INSERT INTO user ( ";
            $query .= "user_name, user_email, user_password";
            $query .= ") VALUES (";
            $query .= "'{$userName}', '{$email}', '{$hashPassword}'";
            $query .= ")";

            $result = mysqli_query($con, $query);
//            $result = mysqli_query($connection, $query);

            if ($result){
//                query successfully redirect to thr user page
                header('Location: ../landingPage/index.php');
               

            }else{
                $errors[] = "failed to add new user";
            }

        }

    }

  }


 



  function signIn() {
    global $con;

    if (isset($_POST['loginSubmit'])) {
        $user_username = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $hashPassword = sha1($user_password);


        $select_query = "SELECT * FROM `user` WHERE user_name='$user_username' AND user_password = '$hashPassword'";
        $result = mysqli_query($con, $select_query);
        $row_count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        // CHECKING that have more than rows related to that user name
        if ($row_count > 0) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];

            // No need for password_verify if using sha1 hashing
            // if (password_verify($user_password, $row_data['user_password'])) {
            echo "<script>alert('Login successful')</script>";
            echo "<script>window.open('afterLoginIndex.php','_self')</script>";
            // } else {
            //     echo "<script>alert('Invalid Credentials')</script>";
            // }
        } else {
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }
}




?>


