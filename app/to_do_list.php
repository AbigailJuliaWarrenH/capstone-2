<?php 
function getTitle(){
	echo "To Do List";
} 

function getContent() { ?>
<h1>To Do List</h1>
<div class="container-fluid">
	<form action="controllers/to_do_list_endpoint.php" method="POST">
		<div class="form-group">
			<label for="task">Type in Task Belown then Click Add Task Button</label>
			<input type="text" name="addtask" id="addtask" class="form-control">
		</div>
		
		<button class="btn btn-dark" name="btntask" id="btntask">Add Task</button>

	</form>

</div>
<br>
<div>

<?php 
 // JEAN
$json_string = file_get_contents('tasks.json');
$task = json_decode($json_string, true);

foreach($task as $taskdata){


// JEAN END

 ?>

	<form action="controllers/task_del_endpoint.php" method="POST">
		<ul id="myUL">
			<!-- <li>
			<input type="text" value="">
			<button class="btn1 btn btn-success">Done</button>
			<button class="btn2 btn btn-danger">Remove</button>
			</li>
			<li>
			<input type="text" id="task1">
			<button class="btn1 btn btn-success">Done</button>
			<button class="btn2 btn btn-danger">Remove</button>
			</li>
			<br>
			<li>
			<input type="text" id="task2">
			<button class="btn1 btn btn-success">Done</button>
			<button class="btn2 btn btn-danger">Remove</button>
			</li>
			<br>
			<li>
			<input type="text" id="task3">
			<button class="btn1 btn btn-success">Done</button>
			<button class="btn2 btn btn-danger">Remove</button>
			</li> -->
			<!-- JEAN-->
			<?php echo $taskdata ?>

			<input type="text" name="taskremove" value="<?php echo $taskdata ?>" hidden>
			<button>Remove</button>
			<!--JEAN END -->
		</ul>
	</form>	
</div>
<?php }// JEAN END ?>
<div id= "mylist">
<script type="text/javascript">


	//---JEROME'S ANSWER
	// let tasks;
	// // ajax get method
	// $.get('tasks.json', function (data) {
	// 	tasks = data;

	// 	for (let task of tasks) {
	// 		$("#myUL").append('<li><input type="text" value="'+task+'"><button class="btn1 btn btn-success">Done</button><button class="btn2 btn btn-danger">Remove</button></li>');

	// 	} ---JEROME'S ANSWER END
	// });



value=" '+remtask+'"
	$('#btntask').click (() =>{
		let tasks = $('#addtask').val();
		let lists = "<input id = 'tasklist' type='text' value=' "+tasks+" '><button type = 'button'>Done</button><button type = 'button'>Remove</button><br>";
		let listcontainer = $ ('#mylist');
		list container.append(lists);
	});



</script>
</div>

<!-- <div class="container-fluid">
	<form action="controllers/to_do_list_endpoint.php" method="POST">
		<div class="form-group">
			<label for="task">Type in Task Belown then Click Add Task Button</label>
			<input type="text" name="addtask" id="addtask" class="form-control">
		</div>
		
		<button class="btn btn-dark" name="btntask" id="btntask">Add Task</button>

	</form>

</div>
<br>
 -->

<?php } ?>

<?php require 'template.php'; ?>
