<?php

 require_once 'connect.php';

 $task_id = $_POST['task_id'];
 $sql = "UPDATE tasks SET status = IF(status = 0,1,0) WHERE id = $task_id";
 mysqli_query($conn, $sql);
 
 // if add button is pressed (meaning, there is a new task)
 // if (isset($_GET['newtask'])) {
	// $json_string = file_get_contents('../tasks_done.json');
	// $tasks_state = json_decode($json_string, true);

	// array_push($tasks_state, "undone");
	// // print_r($tasks_state);

	// $fp = fopen('../tasks_done.json' , 'w');
	// fwrite($fp, json_encode($tasks_state, JSON_PRETTY_PRINT));
	// fclose($fp);
 // }

 // if done button is pressed
 // if (isset($_GET['done-at-index'])) {
 // 	$index = (int)$_GET['done-at-index'];

	// $json_string = file_get_contents('../tasks_done.json');
	// $tasks_state = json_decode($json_string, true);

	// $tasks_state[$index] = ($tasks_state[$index] == "done") ? "undone" : "done";

	// $fp = fopen('../tasks_done.json' , 'w');
	// fwrite($fp, json_encode($tasks_state, JSON_PRETTY_PRINT));
	// fclose($fp);
 // }

 // if task is removed
 // if (isset($_GET['remove-at-index'])) {
 
	// $index = (int)$_GET['remove-at-index'];

	// $json_string = file_get_contents('../tasks_done.json');
	// $task_state = json_decode($json_string, true);

	// unset($task_state[$index]); //removes element in the array at the set index

	// // converts the associative array ($task_state) into a simple array ($updated_task_state)
	// $updated_task_state = array_values($task_state);

	// // updates the database (tasks_done.json)
	// $fp = fopen('../tasks_done.json' , 'w');
	// fwrite($fp, json_encode($updated_task_state, JSON_PRETTY_PRINT));
	// fclose($fp);
 // }
 ?>