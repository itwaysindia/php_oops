<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://jsonplaceholder.typicode.com/users',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
// echo "<pre>";
// echo $response;

 $data = json_decode($response, true);
// print_r($data);

if(is_array($data)){
    echo '<table border="1"><tr><th>ID</th>
    <th>Name</th><th>Username</th><th>Email</th><th>Address</th></tr>';
    foreach($data as $user){
        echo "<tr>
        <td>". $user['id']."</td>
        <td>". $user['name']."</td>
        <td>". $user['username']."</td>
        <td>". $user['email']."</td>
        <td>". $user['address']['suite'].", ". $user['address']['street'] .", ". $user['address']['city'] ."</td>
        </tr>";
    }
    echo "</table>";
}