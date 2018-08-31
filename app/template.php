<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  	
	<title><?php getTitle(); ?></title>
	<?php require_once 'partials/header.php' ?>
</head>
<body>
	<?php require_once 'partials/nav.php' ?>

	<div class="container-fluid">
		<?php getContent(); ?>
	</div>

	<?php //require_once 'partials/footer.php' ?>

</body>
</html>