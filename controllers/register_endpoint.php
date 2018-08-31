<?php 
require 'connect.php';

$username = $_POST['username'];
$password = sha1($_POST['password']);
// $confirmpassword = sha1($_POST['confirmpassword']);

$sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
mysqli_query($conn, $sql);

header('location: ../index.php');
// echo "$username $password $confirmpassword";
 ?>