<?php 

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content_Type, Access-Control-Allow-Headers, Authorization, X-Request-with');


include 'function.php';

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){

    $customerList = getCustomerList();
    echo $customerList;
}else{

    $data = [

        'status' => 405,
        'message' => $requestMethod. 'Method NOt Allowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);

}


?>