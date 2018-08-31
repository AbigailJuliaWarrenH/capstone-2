<?php 

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;



require 'paypal/start.php';


$payer = new Payer();
$payer->setPaymentMethod('paypal');


$item = new Item();
$item->setName('test product')
	->setCurrency('PHP')
	->setQuantity(2)
	->setPrice(100);

$item_list = new ItemList();
$item_list->setItems([$item]);

$amount = new Amount();
$amount->setCurrency('PHP')
	->setTotal(200);

// $details = taxes, shipping fee 

$transaction = new Transaction();
$transaction
	->setAmount($amount)
	->setItemList($item_list)
	->setDescription('payment for JovitaBellezaManila purchase')
	->setInvoiceNumber(uniqid('JovitaBellezaManila'));	

$redirectUrls = new RedirectUrls();
$redirectUrls
		->setReturnUrl(SITE_URL.'/controllers/pay.php?success=true')
		->setCancelUrl(SITE_URL.'/controllers/pay.php?success=false');

$payment = new Payment();
$payment->setIntent('sale')
	->setPayer($payer)
	->setRedirectUrls($redirectUrls)
	->setTransactions([$transaction]);

try{
	$payment->create($paypal);

} catch(Exception $e) {
	die($e->getData());
}

$approvalUrl= $payment->getApprovalLink();

header('location: '.$approvalUrl);



 ?>