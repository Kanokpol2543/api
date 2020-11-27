<!doctype html>
<?php
  $username=$_POST['ID'];
  $password=$_POST['pass'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://restapi.tu.ac.th/api/v1/auth/Ad/verify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"UserName\" : \"$username\",\"PassWord\" : \"$password\"}",
  CURLOPT_HTTPHEADER => array(
	  "Content-Type: application/json",
    "Application-Key: TU108bbf2ba2d0c0c1ae8b15071533a34978ae95a00c18034dbcc0ad3d3b6908413152a468046c20adb8b288b14a91c86c"
   
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$check = json_decode($response,true);

?>
