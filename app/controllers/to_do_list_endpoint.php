<?php 
$addtask = $_POST['addtask'];

// echo $addtask;

$new_task = $addtask;

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
$php_array = json_decode($json_string, true);
$tasks[] = $new_task;
// array_push($php_array, $addtask);
// print_r($php_array);

$fp = fopen('../tasks.json' , 'w');
fwrite($fp, json_encode($php_array, JSON_PRETTY_PRINT));
fclose($fp);

header('location: ../to_do_list.php');
// echo "$username $password $confirmpassword";
 ?>