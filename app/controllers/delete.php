<?php 

//create db connection
require_once 'connect.php';

//create session
session_start();

//get specific item to delete

$item_id = $_POST['id'];

//delete the item from tasks table

$sql ="DELETE FROM tasks WHERE id = $item_id";
mysqli_query($conn, $sql);

// get tasks of current user

$sql = "SELECT * FROM tasks WHERE used_id = " . $_SESSION['current_user'];

$result = mysqli_query($conn, $sql);

//return the set of tasks of current user
$tasks = []; //accumulator, mepty array
while ( $row = mysqli_fetch_assoc($result)){
	array_push($tasks, $row);
}

echo json_encode($tasks);
// echo json_encode(array('tasks' => mysqli_fetch_array($result)));
// <br />
// <b>Warning</b>:  mysqli_fetch_assoc() expects parameter 1 to be mysqli_result, boolean given in <b>C:\Users\Day10\Desktop\xampp\htdocs\mod09-08\app\controllers\delete.php</b> on line <b>26</b><br />
// []
 ?>