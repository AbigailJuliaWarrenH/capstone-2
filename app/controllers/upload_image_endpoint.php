<?php 
//print_r($_FILES['image']);

if (file_exists('../assets/images/'.$_FILES['image']['name'])) {
	echo "error.sorry this file already exists";
} else{
	move_uploaded_file($_FILES ['image']['tmp_name'],'../assets/images/'.$_FILES['image']['name']);
	echo "file uploaded successfully";
}
?>