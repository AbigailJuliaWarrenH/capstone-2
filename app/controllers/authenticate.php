<?php 
 	session_start();
 	echo "superglobal session variable: ";
 	print_r($_SESSION);

	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	// echo "username: ".$username.", password : " .$password;

	// require_once "../users_list.php";   //copy paste require_once


$string = file_get_contents('../users.json');
$users = json_decode($string, true);


$match_flag = false;

	foreach ($users as $user) {
		if ($user['username'] == $username && $user ['password'] == $password) {
			$match_flag = true;
			break;
			} 
		//  else {
		// 	echo "did not matched <br>"; 
		// }

	}

	// if($match_flag==true){
	// 		echo "Login successful <br>";
	// 		$_SESSION['logged_in_user'] = $username;
	// } else {
	// 	echo "Incorrect username/password. Please login again <a href='../index.php'>here</a>"; 
	// }

	if($match_flag==true){
			$_SESSION['logged_in_user'] = $username;
			header('location: ../index.php');
	} else {
		$_SESSION['error_message'] = 'Incorrect username/password. Please login again' ;
		// echo "Incorrect username/password. Please login again <a href='../index.php'>here</a>"; 
	}

	header('location: ../index.php');


 ?>