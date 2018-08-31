<?php

require_once 'connect.php';

$new_task = $_GET['addtask'];

$sql = "INSERT INTO tasks (name, user_id) VALUES ('$new_task', 3)";
mysqli_query($conn, $sql);
$id = mysqli_insert_id($conn);

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

// $json_string = file_get_contents('../mylist.json');
// $php_array = json_decode($json_string, true);
// $php_array[] = $new_task;
// array_push($php_array, $addtask);
// print_r($php_array);

// $fp = fopen('../mylist.json' , 'w');
// fwrite($fp, json_encode($php_array, JSON_PRETTY_PRINT));
// fclose($fp);

// header('location: ../to_do_list.php');
// echo "$username $password $confirmpassword";
 ?>
<li>
	<input type="text" value="<?php echo $new_task; ?>">
	<button class="btn1 btn btn-success" data-id="<?php echo $id; ?>">Done</button>
	<button class="btn2 btn btn-danger" data-id="<?php echo $id; ?>">Remove</button>
</li>