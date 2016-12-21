<?php
require_once('../../../autoload.php');
require_once('../../../includes/config.php');
$configArray = array(
    'ClientID' => $rest_client_id,
    'ClientSecret' => $rest_client_secret
);
$PayPal = new angelleye\PayPal\rest\billing\BillingAPI($configArray);

$agreementId = '';                       // The ID of the Billing Agreement for which to Suspend Billing Agreement.
$note        = '';                       // Reason for changing the state of the agreement. 

$returnArray = $PayPal->reactivate_billing_agreement($agreementId,$note);
echo "<pre>";
var_dump($returnArray);
?>