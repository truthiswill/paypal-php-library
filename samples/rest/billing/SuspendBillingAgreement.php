<?php
require_once('../../../autoload.php');
require_once('../../../includes/config.php');
$configArray = array(
    'ClientID' => $rest_client_id,
    'ClientSecret' => $rest_client_secret
);
$PayPal = new angelleye\PayPal\rest\billing\BillingAPI($configArray);

$agreementId = 'I-C76T8XF96HBX';                       // The ID of the Billing Agreement for which to Suspend Billing Agreement.
$note        = 'Suspending the agreement';             // Reason for changing the state of the agreement. 

$returnArray = $PayPal->suspend_billing_agreement($agreementId,$note);
echo "<pre>";
var_dump($returnArray);
?>