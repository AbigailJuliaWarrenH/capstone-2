<?php 
function getTitle(){
	echo "Register";
} 

function getContent() { ?>
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

		<button id= "registerBtn" type="button" class="btn btn-primary">Register</button>

	</form>

	 

<script type="text/javascript">
	let users = '';
	$.get('users.json', (data) => {
		users = data;
	});

	$('#registerBtn').click( () => {
		const username = $('#username').val();
		 //json php array --json encode --JSON.parse --converted so that it will be read by js ---json usually used by ati -- usually works data
		let	errorFlag = false;
		if (username.length == 0) { // empty username
			$('#username').next().css('color', 'red');
			$('#username').next().html('this field is required');
			errorFlag = true;
		} else { // non-empty username
			for (user of users){
				if (user.username == username) {
					errorFlag = true;
					break;
				}
			}

		
			if(errorFlag == true) {
				$('#username').next().css('color' , 'red');
				$('#username').next().html('Username already exist');
				

				// console.log ('username already exist');
			} else {
				$('#username').next().css('color' , 'green');
				$('#username').next().html('Username still available');
				// console.log ('username still available');
			}	
		}
		

		

		const password = $('#password').val();
		const confirmPassword = $('#confirmpassword').val();
		if (password.length == 0) {
		// if (password !== confirmpassword) {
			$('#password').next().css('color','red');
			$('#password').next().html('This field is required.');
			errorFlag = true;
		} else {
			$('#password').next().html('');
		}

		if(password !== confirmPassword) {
			$('#confirmpassword').next().css('color','red');
			$('#confirmpassword').next().html('passwords did not match');
			errorFlag = true;
		}else {
			$('#confirmpassword').next().html('');
		}


		if(errorFlag == false){
			$('#register_form').submit();
		}
});

</script>


<?php } ?>


<?php require 'template.php'; ?>
