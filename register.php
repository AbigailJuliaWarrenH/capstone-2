<?php 
function get_title(){
	echo "Register";
} 

function get_content() { ?>
<h3>Register</h3>	
	<form id= 'register_form' action="controllers/register_endpoint.php" method="POST">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" class="form-control"><span></span>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control"><span></span>
		</div>
		<div class="form-group">
			<label for="password">Confirm Password</label>
			<input type="password" name="confirmpassword" id="confirmpassword" class="form-control"><span></span><br>
		</div>

		<button id= "registerBtn" class="btn btn-primary">Register</button>

	</form>

	 

<script type="text/javascript">

</script>


<?php } ?>


<?php require 'template_products.php'; ?>
