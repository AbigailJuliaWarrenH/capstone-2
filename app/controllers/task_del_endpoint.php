<?php 

// echo $addtask;

// $new_task = [
// 	'addtask'=>$addtask,
	
// ]; 

// print_r($new_task);

// $json_string = file_get_contents('../tasks.json');
// $tasks = json_decode($json_string, true);
// $tasks = $new_task; //array_push($tasks, $new_task);

// array_push($php_array, $addtask);
// print_r($php_array);

// $fp = fopen('../tasks.json' , 'w');
// fwrite($fp, json_encode($tasks, JSON_PRETTY_PRINT));
// fclose($fp);

// header('location: ../to_do_list.php');



$json_string = file_get_contents('../tasks.json');
$tbl_task = json_decode($json_string, true);
$task = $_POST['taskremove'];

$selectedtask = array_search($task, $tbl_task);
$return = array_splice($tbl_task, $selectedtask, 1);
// print_r($return);



$fp = fopen('../tasks.json' , 'w');
fwrite($fp, json_encode($tbl_task, JSON_PRETTY_PRINT));
fclose($fp);

header('location: ../to_do_list.php');
// echo "$username $password $confirmpassword";
 ?>