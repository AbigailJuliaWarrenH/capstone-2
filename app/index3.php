<?php 
function getTitle(){
	echo "Upload";
} 

function getContent() { ?>

<h1>Upload</h1>
<form enctype="multipart/form-data" action="controllers/upload_image_endpoint.php" method="POST">
	Image:<input type="file" name="image"><br>
	<input type="submit" name="submit" value="Upload file"><br>
</form>

<?php } ?>

<?php require 'template.php'; ?>