<?php
require_once("vendor/autoload.php");
\Stripe\Stripe::setApikey("sk_test_7wEGkELTveEGbs4tN82PhiV0002C6aWJeb");
$token = $_POST['stripeToken'];
try {
    $charge =\Stripe\Charge::create(array(
    "amount"=>1000 ,
    "currency"=>"usd",
    "source"=>$token,
    "description"=>"For donation"
));
    require("done.html");
} catch (\Stripe\Error\Card $e) {
}
