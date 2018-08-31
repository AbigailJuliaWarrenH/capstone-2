<?php 
$username = $_POST['username'];
$password = sha1($_POST['password']);
$confirmpassword = sha1($_POST['confirmpassword']);

$new_user = [
	'username'=>$username,
	'password'=>$password
]; 

$json_string = file_get_contents('../users.json');
$php_array = json_decode($json_string, true);
array_push($php_array, $new_user);
print_r($php_array);

$fp = fopen('../users.json' , 'w');
fwrite($fp, json_encode($php_array, JSON_PRETTY_PRINT));
fclose($fp);

header('location: ../index.php');
// echo "$username $password $confirmpassword";
 ?>