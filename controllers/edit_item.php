<?php
session_start();
require 'connect.php';
$id = $_GET['id'];
$name = mysqli_escape_string($conn, $_POST['productname']);
$description = mysqli_escape_string($conn, $_POST['productdescription']);
$price = $_POST['productprice'];
$category_id = mysqli_escape_string($conn, $_POST['productcategories']);
$has_image = (file_exists($_FILES['productimage']['tmp_name']) && is_uploaded_file($_FILES['productimage']['tmp_name']));
 if ($has_image) {
	$image = "assets/images/".$_FILES['productimage']['name'];
	move_uploaded_file($_FILES['productimage']['tmp_name'], "../".$image);
	$sql = "UPDATE items SET
		name = '$name',
		description = '$description',
		price = $price,
		image = '$image',
		category_id = $category_id
		WHERE id = $id";
} else {
	$sql = "UPDATE items SET
		name = '$name',
		description = '$description',
		price = $price,
		category_id = $category_id
		WHERE id = $id";
}
mysqli_query($conn,$sql) or die(mysqli_error($conn));
 // $_SESSION['success_message'] = "$name Added Successfully";
header('location: ../productlist.php'); 
// echo "$has_image";