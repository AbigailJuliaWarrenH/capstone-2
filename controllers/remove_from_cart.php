<?php

session_start();
$id = $_POST['id'];

unset($_SESSION['cart'][$id]);

if (count($_SESSION['cart']) == 0) {
	unset($_SESSION['cart']);
}