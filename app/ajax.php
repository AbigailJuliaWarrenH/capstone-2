<?php 
function getTitle(){
	echo "jQuery AJAX";
} 

function getContent() { ?>

<div class="container-fluid">
	<h1>jQuery AJAX</h1>

</div>

<script type="text/javascript">
	$.get('controllers/users_list_endpoint.php' , (data) =>{
		data = JSON.parse(data);
		console.log(data);
	});

</script>


<?php } ?>

<?php require 'template.php'; ?>