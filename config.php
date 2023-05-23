<?php

/* 
PayPal Setting and Database configuration
*/

//Paypal Settings and Configuration
define('PAYPAL_ID','');
define('PAYPAL_SANDBOX', TRUE); //TRUE OR FALSE

define('PAYPAL_RETURN_URL','https://laraveltuts.com/paypal/success.php');
define('PAYPAL_CANCEL_URL','https://laraveltuts.com/paypal/cancel.php');
define('PAYPAL_NOTIFY_URL','https://laraveltuts.com/paypal/ipn.php');
define('PAYPAL_CURRENCY','USD');

//Database Configuration
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','paypal');

//Change Not Required
define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");