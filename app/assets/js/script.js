let deleteElement = document.querySelectorAll('[id^="delete"]');
deleteElement.forEach(function (element) {
	element.addEventListener('click', function (e){
		// retrieve id of specific item to delete
		let taskToDelete = element.getAttribute('data-index');

		//ajax request

		$.post('controllers/delete.php',
		{ id: taskToDelete},
		function (data) {
			// console.log(data)
			let tasks = JSON.parse(data);
			let htmlString = '';
			tasks.forEach(function(task){
				htmlString += `<li><span><i id="delete${task['id']}" data-index="${task['id']}" class="fa fa-trash"></i> </span>${task['name']}</li>`;
				// htmlstring = '<li>${task.name}</li>';
				//console.log(task)
			});
			// console.log(tasks);
			let list = document.querySelectorA('#pendingTasks');
			list.innerhtml =newSetOfTasks;


		});
	});
});
	// console.log(deleteElement.id); -----
