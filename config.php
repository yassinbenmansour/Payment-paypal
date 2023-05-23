<?php 
 
// Product details 
$itemName   = "Product : Leure"; 
$itemNumber = "P123456"; 
$payableAmount = 250; 
$currency   = "USD"; 
 
// PayPal NVP/SOAP API Credentials 
define('PAYPAL_API_USERNAME', 'API_Username'); 
define('PAYPAL_API_PASSWORD', 'API_Password'); 
define('PAYPAL_API_SIGNATURE', 'API_Signature'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE=Sandbox or FALSE=Production 
 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'paypal'); 
 
?>
