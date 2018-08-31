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
$transaction_code = $payment->getTransactions()[0]->getInvoiceNumber();
$shipping_address_array = json_decode($payment->getTransactions()[0]->getItemlist()->getShippingAddress());
$address = '';
foreach ($shipping_address_array as $key => $address_piece) {
	if($key != 'recipient name'){
		$address .= $address_piece." ";
	}
}
$sql = "INSERT INTO orders VALUES(null, '$transaction_code', $user_id, '$address', null, 1, null, 2)"
// $execute = new PaymentExecution();
// $execute


 ?>