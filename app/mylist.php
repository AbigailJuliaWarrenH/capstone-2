<?php 
function getTitle(){
	echo "To Do List";
} 

function getContent() { ?>
<style>
	.done {
		text-decoration: line-through;
	}
</style>

<h1>To Do List</h1>
<div class="container-fluid">

	<!-- <form action="controllers/mylist_endpoint.php" method="POST"> -->
		<div class="form-group">
			<label for="task">Type in Task Belown then Click Add Task Button</label>
			<input type="text" name="addtask" id="addtask" class="form-control">
		</div>
		
		<button class="btn btn-dark" name="btntask" id="btntask">Add Task</button>

	<!-- </form> -->

</div>
<br>
<div>
	<div id="myUL">
		<?php
			require_once 'controllers/connect.php';
			$sql = "SELECT * FROM tasks";
			$result = mysqli_query($conn, $sql);
		?>
		<?php while ($task = mysqli_fetch_assoc($result)) :?>
			<?php $task_status = $task['status'] ? "done" : "undone"; ?>
			<li>
				<input class="<?php echo $task_status; ?>" type="text" value="<?php echo $task['name']; ?>">
	 			<button class="btn1 btn btn-success" data-id="<?php echo $task['id']; ?>">
	 				<?php echo $task['status'] ? "Undone":"Done" ; ?>
	 			</button>
	 			<button class="btn2 btn btn-danger" data-id="<?php echo $task['id']; ?>">Remove</button>
 			</li>
		<?php endwhile ?>
	</div>
	<!-- <form action="controllers/mylist_endpoint.php" method="POST">
		<ul id="myUL">
			<li>
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
			</li>
			
			
		</ul>
	</form>	 -->
</div>
<div id= "mylist" class="card">
	<?php $json_string = file_get_contents('mylist.json'); ?>
	<?php $tasks =json_decode($json_string, true); ?>
	<?php //foreach ($tasks as $task) : ?>
</div>

<script type="text/javascript">

// let tasklist = ['task1' , 'task2', 'task3'];
// const updateTasksList = () => {

// 	$('tasksList').html('');
// 	for(task of tasklist){
// 		$('#tasklist').append('\
// 			<li><input type="text" value="'+task+'">\
// 			<button class="btn1 btn btn-success">Done</button>\
// 			<button class="btn2 btn btn-danger">Remove</button>\
// 			</li>\
// 			')
// 	}
// }

	//---JEROME'S ANSWER
	let count = 0; // not important

	// let tasks_state;
	// let tasks;
	// $.get('tasks_done.json', function(data) {
	// 	tasks_state = data;

	// 	// ajax get method
	// 	$.get('mylist.json', function (data) {
	// 		tasks = data;

	// 		for (let task of tasks) {
	// 			$("#myUL").append('\
	// 			<li><input type="text" value="'+task+'">\
	// 			<button class="btn1 btn btn-success">Done</button>\
	// 			<button class="btn2 btn btn-danger" id="'+count+'">Remove</button>\
	// 			</li>\
	// 			')
	// 			count++;
	// 		}

	// 		for (let i = 0; i < tasks_state.length; ++i) {
	// 			let task_state = tasks_state[i];
	// 			if (task_state == "done") {
	// 				$('#myUL input').eq(i).css("text-decoration","line-through");
	// 			} else {
	// 				$('#myUL input').eq(i).css("text-decoration","none");
	// 			}
	// 		}
	// 	});
	// });

	// add
	$('#btntask').click (() =>{
		let tasks = $('#addtask').val();
		// let lists = "<li><input id = 'tasklist' type='text' value=' "+tasks+" '>\
		// <button  class='btn1 btn btn-success'>Done</button>\
		// <button class= 'btn2 btn btn-danger' id='"+count+"'>Remove</button>\
		// </li>";
		// count++;

		// jQuery AJAX GET method
		$.get('controllers/mylist_endpoint.php?addtask='+tasks, function(data) {
			let listcontainer = $('#myUL');
			listcontainer.append(data);
		});

		// $.get('controllers/mylist_done_endpoint.php?newtask=undone');
		// tasks_state.push("undone");
	});


	// done
	$('#myUL').on("click", ".btn1", function() {
			const task_id = $(this).data('id');

			let state = $(this).html().trim();
			if (state == "Undone") {
				$(this).prev().removeClass("done");
				$(this).prev().addClass("undone");
				$(this).html('Done');
			} else {
				$(this).prev().removeClass("undone");
				$(this).prev().addClass("done");
				$(this).html('Undone');
			}

			$.ajax({
				method: 'post' ,
				url: 'controllers/mylist_done_endpoint.php' ,
				data: {task_id : task_id}
			});
			// $.get('controllers/mylist_done_endpoint.php?done-at-index=' + order);
		});

	// remove
	$('#myUL').on("click", ".btn2", function() {
			const task_id = $(this).data('id');
			$.ajax({
				method: 'post' ,
				url: 'controllers/mylist_del_endpoint.php' ,
				data: {task_id : task_id}
			});
			// $.get('controllers/mylist_del_endpoint.php?remove-at-index=' + order);
			// $.get('controllers/mylist_done_endpoint.php?remove-at-index=' + order);
			$(this).parent().remove();
		});


//value=" '+remtask+'"
	// $('#btntask').click (() =>{
	// 	let tasks = $('#addtask').val();
	// 	let lists = "<input id = 'tasklist' type='text' value=' "+tasks+" '><button type = 'button'>Done</button><button type = 'button'>Remove</button><br>";
	// 	let listcontainer = $ ('#mylist');
	// 	list container.append(lists);
	// });


</script>

<?php } ?>

<?php require 'template.php'; ?>

