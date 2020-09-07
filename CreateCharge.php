<script src="http://localhost/public/js/tienda/carrito.js"></script>
<script src="http://localhost/public/js/tienda/createCharge.js"></script>

<?php
//$p = $_POST["puto"] ;
$amount = 1010 ;

	require 'vendor/autoload.php' ;

	\Stripe\Stripe::setApiKey("sk_test_lErngDkNeiq0E7kh5qiBIAhV") ;

	$token = $_POST["stripeToken"];
	$charge = \Stripe\Charge::create([
		"amount" => $amount,
		"currency" => "usd",
		"description" => "Pago en mi tienda",
		"source" => $token 
	]);

	echo "<pre>",print_r($charge),"</pre>";
?>
