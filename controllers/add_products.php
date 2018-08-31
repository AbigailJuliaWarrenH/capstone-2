<?php 


	echo "post: <br>";
	print_r($_POST);

	echo "<br><hr>files: <br>";
	print_r($_FILES);

	require 'connect.php';

	$productname = mysqli_escape_string($conn, $_POST['productname']);
	$productcategory = mysqli_escape_string($conn, $_POST['productcategories']); 
	$productprice = $_POST['productprice'];
	$productdesc =  mysqli_escape_string($conn, $_POST['productdescription']);
	$productimage = "assets/images/".$_FILES['productimage']['name'];

	move_uploaded_file($_FILES['productimage']['tmp_name'],"../".$productimage);


	$addProduct = "INSERT INTO items (name, category_id, price, description, image) VALUES('$productname', '$productcategory', '$productprice', '$productdesc',  '$productimage')";
// echo $addProduct; exit;
	mysqli_query($conn, $addProduct) or die(mysqli_error($conn));

	header('location: ../index.php');


 ?>