<?php 
 session_start();

 use PayPal\Api\Payment;
 use PayPal\Api\PaymentExecution;

 require 'paypal/start.php';
 require '../connection.php';

 if (!isset($_GET['success'], $_GET['paymentId'], $_GET['PayerId'])) {
 	die();

 }

if((bool)$_GET['success'] === false){
	echo "Transaction cancelled. <a href='../index.php'>Go back to JovitaBellezaManila.</a>"; die();

}

$payment_id = $_GET['paymentId'];
$payer_id = $_GET['PayerId'];


$payment = Payment::get($payment_id, $paypal);
$execute = new PaymentExecution();
$execute


 ?>