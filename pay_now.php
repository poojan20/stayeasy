<?php
    
    require('admin/inc/db_config.php');
    require('admin/inc/essentials.php');

    require('inc/razorpay/payment.php');
    require('inc/razorpay/encdec_paytm.php');


    date_default_timezone_set("Asia/Kolkata");

    //session_start();

    if(!(isset($_SESSION['login']) && $_SESSION['login'] == true))
    {
        redirect('index.php');
    }
    if(isset($_POST['pay_now']))
    {
        header("Pragma: no-cache");
        header("Cache-Control: no-cache");
        header("Expires: 0");
    
                
        $ORDER_ID = 'ORD_'.$_SESSION['uId'].random_int(11111,99999999);
        $CUST_ID = $_SESSION['uId'];
        $INDUSTRY_TYPE_ID = INDUSTRY_TYPE_ID;
        $CHANNEL_ID = CHANNEL_ID;
        $TXN_AMOUNT = $_SESSION['room']['payment'];

        $paramList["MID"] = $apiKey;
        $paramList["ORDER_ID"] = $ORDER_ID;
        $paramList["CUST_ID"] = $CUST_ID;
        $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
        $paramList["CHANNEL_ID"] = $CHANNEL_ID;
        $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
        //$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;

        $paramList["CALLBACK_URL"] = CALLBACK_URL;

        $checkSum = getChecksumFromArray($paramList,$apiKey);



        
    
    }


?>