<?php
session_start();
$id = $_POST['item_id'];
$quantity = $_POST['item_quantity'];

if(isset($_SESSION['cart'][$id])) { // if item where id = $id exists in the cart
	$_SESSION['cart'][$id] += $quantity;
} else {
	$_SESSION['cart'][$id] = $quantity;
}