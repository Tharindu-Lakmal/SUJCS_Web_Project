 <?php 
 
 require_once '../connection.php';


function error422($message){

    $data = [

        'status' => 422,
        'message' => $message,
    ];
    header("HTTP/1.0 422 Unprocessable Entity");
    echo json_encode($data);
    exit();


}


 function storeCustomer($customerInput){

    global $con;

    $name = mysqli_real_escape_string($con, $customerInput['user_name']);
    $email = mysqli_real_escape_string($con, $customerInput['user_email']);


    if(empty(trim($name))){

        return error422('Enter your user name');

    }elseif(empty(trim($email))){

        return error422('Enter your email');

    }else{

        $query = "INSERT INTO user (user_name, user_email) VALUES ('$name', '$email')";
        $result = mysqli_query($con, $query);

        if($result){

            $data = [
                'status' => 201,
                'message' => 'Customer Created Successfully',
            ];
    
            header("HTTP/1.0 201 cretad");
            return json_encode($data);


        }else{

            $data = [
                'status' => 500,
                'message' => 'Internal Server Error',
            ];
    
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);

        }

    }

 }


 function getCustomerList(){

    global $con;

    $query = "SELECT * FROM user";
    $query_run = mysqli_query($con, $query);

    if($query_run){

        if(mysqli_num_rows($query_run) > 0){

            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

            $data = [
                'status' => 200,
                'message' => 'Users List Fetch Successfully',
                'data' => $res,
            ];
    
            header("HTTP/1.0 200 Ok");
            return json_encode($data);

        }else{

            $data = [
                'status' => 404,
                'message' => 'No User Found',
            ];
    
            header("HTTP/1.0 404 No User Found");
            return json_encode($data);

        }

    }else{

        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];

        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }


 }
 
 
 ?>