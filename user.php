<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, API-Key, Secret");

require_once('../includes/config.php');

$db = new db();

$headers = apache_request_headers();
$api_key = isset($headers['API-Key']) ? $headers['API-Key'] : '';
$secret = isset($headers['Secret']) ? $headers['Secret'] : '';

if(empty($api_key) || empty($secret)){
    http_response_code(401);
    echo json_encode(array("message" => "Access Denied. No API key or Secret Key found"
    ));
    exit();
}

$query = "select api, secret from api_key where api = '". $api_key . "'";



$data = json_decode(file_get_contents("php://input"));

if(!isset($data->name, $data->email)){
    http_response_code(400);
    echo json_encode(array("message" => "Unable to create data in database"
));
exit();
}

$name = $data->name;
$email = $data->email;

$arr = array(
'name' => $name,
'email' => $email

);
$ok = $db->insert_query('users', $arr);
if($ok){
    http_response_code(200);
    echo json_encode(array("message" => "Record Updated!"
));
exit();
}
?>