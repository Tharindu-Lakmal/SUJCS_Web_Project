<?php 

session_start();

// function signIn(){

//     global $con;

//     if(isset($_POST['loginSubmit'])){
//         $user_username = $_POST['user_name'];
//         $user_password = $_POST['user_password'];
    
//         $select_query = "SELECT * FROM `user` WHERE user_name='$user_username'";
//         $result = mysqli_query($con, $select_query);
//         $row_count = mysqli_num_rows($result);
//         $row_data = mysqli_fetch_assoc($result);
        
    
       
    
//     // CHECKING that have more than rows related that user name
//         if($row_count>0){
//             $_SESSION['user_name'] = $user_username;
//             if(password_verify($user_password,$row_data['user_password'])){
//                 // echo "<script>alert('Login successful')</script>";
                
//                     $_SESSION['username'] = $user_username;
//                     echo "<script>alert('Login successful')</script>";
//                     echo "<script>window.open('index.php','_self')</script>";
                
    
//             }else{
//                 echo "<script>alert('Invalid Credentials')</script>";
//             }
//         }else{
//             echo "<script>alert('Invalid Credentials')</script>";
//         }
    
    
//     }
    
// }


?>



