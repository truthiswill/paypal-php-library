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

$PayPal = new \angelleye\PayPal\rest\notifications\NotificationsAPI($configArray);

$webhook_id = '6PN687461P1543922';  // The ID of the webhook to delete.

// Pass data into class for processing with PayPal and load the response array into $PayPalResult

$PayPalResult = $PayPal->DeleteWebhook($webhook_id);


// Write the contents of the response array to the screen for demo purposes.
echo "<pre>";
print_r($PayPalResult);
