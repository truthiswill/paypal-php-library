<?php
// Include required library files.
require_once('../../../autoload.php');
require_once('../../../includes/config.php');

$configArray = array(
    'Sandbox' => $sandbox,
    'ClientID' => $rest_client_id,
    'ClientSecret' => $rest_client_secret,
    'LogResults' => $log_results,
    'LogPath' => $log_path,
    'LogLevel' => $log_level
);

$PayPal = new angelleye\PayPal\rest\payments\PaymentAPI($configArray);
$order_id = '44565795N60930235'; // Add sale transaction id to see the details of that Order

$result = $PayPal->OrderGet($order_id);
echo "<pre>";
print_r($result);

