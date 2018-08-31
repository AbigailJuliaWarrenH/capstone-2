<?php 
session_start();

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'paypal/start.php';
require 'connect.php';

if(!isset($_GET['success'], $_GET['paymentId'], $_GET['PayerID'])) {
	echo "Error. <a href='../index.php'>Go back to JovitaBellezaManila.</a>"; die();
	die();
}

if((bool)$_GET['success'] === false) {
	echo "Transaction cancelled. <a href='../index.php'>Go back to JovitaBellezaManila.</a>"; die();
	die();
}

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

$payment = Payment::get($paymentId, $paypal);
$execute = new PaymentExecution();
$execute->setPayerId($payerId);

try {
	$result = $payment->execute($execute, $paypal);
	$result = json_decode($result);
	$invoice_number = $result->transactions[0]->invoice_number;
	foreach($result->payer->payer_info->shipping_address as $key => $address_piece) {
		if($key != 'recipient_name') {
			$address_array[] = $address_piece;
		}
	}
	$address = implode(' ', $address_array);
} catch(Execption $e) {
	$data = json_decode($e->getData());
	print_r($data);
	die();
}

$user_id = $_SESSION['logged_in']['id'];
$sql = "INSERT INTO orders VALUES(null,'$invoice_number','$address',null,null,$user_id,1,2)";
mysqli_query($conn,$sql) or die(mysqli_error($conn));
$order_id = mysqli_insert_id($conn);

foreach($_SESSION['cart'] as $id => $quantity) {
	$sql = "INSERT INTO order_details VALUES(null,$id,$quantity,$order_id)";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
}

unset($_SESSION['cart']);
$_SESSION['success_message'] = "Payment Successful!";

header('location: ../index.php');


?>