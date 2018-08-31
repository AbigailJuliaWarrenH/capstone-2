<?php 
function getTitle(){
	echo "Login";
} 

function getContent() { ?>
<?php 
if (isset($_SESSION['logged_in_user'])){
			echo "Welcome ".$_SESSION['logged_in_user'];
		} else {
			echo 'Welcome Guest!';
			require_once 'login.php';
		}

if (isset($_SESSION['error_message'])){
			echo "<span class='error_message'>".$_SESSION['error_message']."</span>";
			unset($_SESSION['error_message']);
		}

 ?>
<?php } ?>


<?php require 'template.php'; ?>


