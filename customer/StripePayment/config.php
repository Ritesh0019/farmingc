<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

$stripeDetails = array(
		"secretKey" => "sk_test_51OxQW6SCWoNNFezuyICnSl7eSp1ppPhWDUZjxxAUGWxdYXtvyr6eVRHRAp0srPYEVnxQJbcrIqnFGHrWgt8K686o000vkEK2Sv",  //Your Stripe Secret key
		"publishableKey" => "pk_test_51OxQW6SCWoNNFezuOiF609EatiDbOmxTKBVPF75IuLvbydQPuMrdicSg3If6ktE1imFnh9MiVWdeveBzB6518HvY008cRXYPax"  //Your Stripe Publishable key
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
