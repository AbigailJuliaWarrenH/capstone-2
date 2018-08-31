<?php
 
 require_once 'connect.php';

 $task_id = $_POST['task_id'];
 $sql = "DELETE FROM tasks WHERE id = $task_id";
 mysqli_query($conn, $sql);
 // $index = (int)$_GET['remove-at-index'];
 
 // $json_string = file_get_contents('../mylist.json');
 // $task_list = json_decode($json_string, true);

 // unset($task_list[$index]); //removes element in the array at the set index
 
 // // converts the associative array ($task_list) into a simple array ($updated_task_list)
 // $updated_task_list = array_values($task_list);

 // // updates the database (mylist.json)
 // $fp = fopen('../mylist.json' , 'w');
 // fwrite($fp, json_encode($updated_task_list, JSON_PRETTY_PRINT));
 // fclose($fp);
 ?>