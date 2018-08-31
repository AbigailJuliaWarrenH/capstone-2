<?php 

require_once 'controllers/connect.php';

session_start();

$_SESSION['current_user'] =3; //current user





 ?>

<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>To Do List</title>
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<header>
		<h1>To-Do LIst App</h1>
	
		<ul>
			<li>User: <span id="username"></span></li>
			<li>Login</li>
			<li>Log Out</li>
		</ul>

	</header>

	<main id="wrapper">
		<input type="text" name="new_task">
		<h2>Pending Task</h2>
		<ul id = "Pending Tasks">
			<?php 


			$sql = "SELECT * FROM tasks WHERE status = 0 AND user_id = ".$_SESSION['current_user'];
			$result = mysqli_query($conn, $sql);

			// $sql = "SELECT t.name, u.username FROM tasks t, users u WHERE t.status = 0 AND  u.username = 'user1'";
			// $result = mysqli_query($conn, $sql);


			while ( $row= mysqli_fetch_assoc($result)) {
				// if ($row['status'] == 0){
				echo '<li><span data-index='.$row['id'].' id= "delete"'.$row['id'].'><i class="fa fa-trash"></i></span>'.$row['name'].'</li>';	
					
				// }
				
			}
	    	 ?>


			
		</ul>
		<h2>Completed Task</h2>
		<ul>
			<?php 

			$sql = "SELECT * FROM tasks WHERE status = 1 AND user_id = ".$_SESSION['current_user'];
			$result = mysqli_query($conn, $sql);


			while ( $row= mysqli_fetch_assoc($result)) {
				// if ($row['status'] == 1){
				// echo '<li><span>' .$row['id'] <i id='delete' .$row['id'].$row['name'] class="fa fa-trash"></i></span>'.$row['name'].</li>';	
				echo '<li><span data-index='.$row['id'].' id= "delete"'.$row['id'].'><i class="fa fa-trash"></i></span>'.$row['name'].'</li>';
					
						
			}
	    	 ?>
		</ul>
		

	</main>	

	<footer>
		<p>Created By: TheBurf3:16</p>
	</footer>

	<!-- import custom script  -->
	<script type="text/javascript" src="assets/js/script.js"></script>

</body>
</html>

<?php 

mysqli_close($conn);

 ?>