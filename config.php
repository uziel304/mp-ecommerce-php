<?php
    require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

    MercadoPago\SDK::setAccessToken("TEST-5329964880319331-112517-61f19fcb1f52a5918f107814e3c167a1-136965970"); // Either Production or SandBox AccessToken

    $payment = new MercadoPago\Payment();
    
    $payment->transaction_amount = 141;
    $payment->token = "YOUR_CARD_TOKEN";
    $payment->description = "Ergonomic Silk Shirt";
    $payment->installments = 1;
    $payment->payment_method_id = "visa";
    $payment->payer = array(
      "email" => "larue.nienow@email.com"
    );

    $payment->save();

    echo $payment->status;
  ?>