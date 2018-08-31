<?php 

require '../vendor/autoload.php';
define('SITE_URL','http://localhost/caps2/');
$paypal = new \PayPal\Rest\ApiContext(
new \PayPal\Auth\OAuthTokenCredential(
'AVIrIWuHO7NufhzZaoP69RhOEWaS9AR850xHxIjVU8RQzkw4AEmb5AqtffZpW9Tbv7sCw7tBkOyZkK4r',
'EHLCIQJgiAr4EHAIyyCB4fB5jxv9aPvF7npT4Vu4rIdopXaibMHBH5JDaR6goDI1oV4BjJF5Qv9u8-FS')

);


 ?>