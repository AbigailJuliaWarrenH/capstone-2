<?php
session_start();
$id = $_POST['item_id'];
$quantity = $_POST['item_quantity'];

$_SESSION['cart'][$id] = $quantity;