<?php
session_start();
$paymentMessage = '';
if (!empty($_POST['stripeToken'])) {

    // get token and user details
    $stripeToken  = $_POST['stripeToken'];
    $customerName = $_POST['customerName'];
    $customerEmail = $_POST['emailAddress'];

    $customerAddress = $_POST['customerAddress'];
    $customerCity = $_POST['customerCity'];
    $customerZipcode = $_POST['customerZipcode'];
    $customerState = $_POST['customerState'];
    $customerCountry = $_POST['customerCountry'];

    $cardNumber = $_POST['cardNumber'];
    $cardCVC = $_POST['cardCVC'];
    $cardExpMonth = $_POST['cardExpMonth'];
    $cardExpYear = $_POST['cardExpYear'];

    //include Stripe PHP library
    require_once('stripe-php/init.php');
    //set stripe secret key and publishable key
    $stripe = array(
        "secret_key"      => "sk_test_51N9KLdDg4MPTz84zEygRuD5iyEcORIFOangSYMkgRGLG3H5S61XMLprUegUQUWZXjUEoV0OA5b3oAlyU61yzWr4F00oDivmLkw",
        "publishable_key" => "pk_test_51Jf58xSCQQ84qVMJli5f03jheHIiS5LiL7iYkSB4YnufNOY8KwSd0a34gZzJX8T61sqMXMloGJA646dXUWRFqvBM00CZ9a3aPE"
    );

    \Stripe\Stripe::setApiKey($stripe['secret_key']);

    //add customer to stripe
    $customer = \Stripe\Customer::create(array(
        'name' => $customerName,
        'description' => 'test description',
        'email' => $customerEmail,
        'source'  => $stripeToken,
        "address" => ["city" => $customerCity, "country" => $customerCountry, "line1" => $customerAddress, "line2" => "", "postal_code" => $customerZipcode, "state" => $customerState]
    ));

    // item details for which payment made
    $itemName = $_POST['item_details'];
    $itemNumber = $_POST['item_number'];
    $itemPrice = $_POST['price'];
    $totalAmount = $_POST['total_amount'];
    $currency = $_POST['currency_code'];
    $orderNumber = $_POST['order_number'];

    // details for which payment performed
    $payDetails = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $totalAmount,
        'currency' => $currency,
        'description' => $itemName,
        'metadata' => array(
            'order_id' => $orderNumber
        )
    ));

    // get payment details
    $paymenyResponse = $payDetails->jsonSerialize();

    // check whether the payment is successful
    if ($paymenyResponse['amount_refunded'] == 0 && empty($paymenyResponse['failure_code']) && $paymenyResponse['paid'] == 1 && $paymenyResponse['captured'] == 1) {

        // transaction details 
        $amountPaid = $paymenyResponse['amount'];
        $balanceTransaction = $paymenyResponse['balance_transaction'];
        $paidCurrency = $paymenyResponse['currency'];
        $paymentStatus = $paymenyResponse['status'];
        $paymentDate = date("Y-m-d H:i:s");

        //insert tansaction details into database
        include_once("partials/_connectdb.php");

        //    $insertTransactionSQL = "INSERT INTO transaction(cust_name, cust_email, card_number, card_cvc, card_exp_month, card_exp_year,item_name, item_number, item_price, item_price_currency, paid_amount, paid_amount_currency, txn_id, payment_status, created, modified) 
        // 	VALUES('".$customerName."','".$customerEmail."','".$cardNumber."','".$cardCVC."','".$cardExpMonth."','".$cardExpYear."','".$itemName."','".$itemNumber."','".$itemPrice."','".$paidCurrency."','".$amountPaid."','".$paidCurrency."','".$balanceTransaction."','".$paymentStatus."','".$paymentDate."','".$paymentDate."')";

        $insertTransactionSQL = "INSERT INTO `order_data` (`order_no`, `cust_name`, `cust_email`, `card_number`, `card_cvc`, `card_exp_month`, `card_exp_year`, `product_id`, `item_price`, `item_price_currency`, `paid_amount`, `paid_amount_currency`, `txn_id`, `payment_status`, `created`, `modified`) VALUES ('$orderNumber', '" . $customerName . "', '" . $customerEmail . "', '" . $cardNumber . "', '" . $cardCVC . "', '" . $cardExpMonth . "', '" . $cardExpYear . "', '" . $itemNumber . "', '" . $itemPrice . "', '" . $paidCurrency . "', '" . $amountPaid . "', '" . $paidCurrency . "', '" . $balanceTransaction . "', '" . $paymentStatus . "', '" . $paymentDate . "', '" . $paymentDate . "')";
        $sql1 = "INSERT INTO `delivery` (`delivery_id`, `product_id`, `order_no`, `staff_id`, `status`, `date`) VALUES (NULL, '" . $itemNumber  . "', '".$orderNumber."', '3', 'IN PROGRESS', current_timestamp());";
        $result1 =  mysqli_query($conn, $sql1);

        // INSERT INTO `order_data` (`order_no`, `cust_name`, `cust_email`, `card_number`, `card_cvc`, `card_exp_month`, `card_exp_year`, `product_id`, `item_price`, `item_price_currency`, `paid_amount`, `paid_amount_currency`, `txn_id`, `payment_status`, `created`, `modified`) VALUES ('bcehjign454583487', 'Ahsan', 'darklight485@gmail.com', '24242442424242', '123', '11', '2027', '4', '10', 'USD', '100', '`USD', '23', 'DONE', '2023-05-25 10:53:44.000000', '2023-05-25 10:53:44.000000');

        mysqli_query($conn, $insertTransactionSQL) or die("database error: " . mysqli_error($conn));

        // $lastInsertId = mysqli_insert_id($conn);

        //if order inserted successfully
        if ($paymentStatus == 'succeeded') {
            $paymentMessage = "The payment was successful. Order ID: {$orderNumber} Check Your Order Tracking from <a href='cart.php'>here</a>";
        } else {
            $paymentMessage = "failed";
        }
    } else {
        $paymentMessage = "failed";
    }
} else {
    $paymentMessage = "failed";
}
$_SESSION["message"] = $paymentMessage;
header('location:checkout.php?id='.$itemNumber.'');