    <?php
    session_start();
    $apiKey = "rzp_test_rSXP5H2w0phj9y";

            define('CHANNEL_ID','WEB');
            define('INDUSTRY_TYPE_ID','Retail');
            define('CALLBACK_URL','http://localhost/stayeasy/pay_response.php');

            

    ?>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>



    <form action="pay_status.php" method="POST">
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $apiKey; ?>" 
        data-amount="<?php echo $_SESSION['room']['payment'] * 100;?>" 
        data-currency="INR"
        data-id="<?php echo 'OID'.rand(10,100).'END';?>"
        data-buttontext="CLICK ME TO DONATION"
        data-name="StayEasy"
        data-description="DONATE!"
        data-prefill.name="<?php echo $_POST['name'];?>"
        data-prefill.email="<?php echo $_POST['email'];?>"
        data-prefill.contact="<?php echo $_POST['mobile'];?>"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" custom="Hidden Element" name="hidden">
    </form>

    <style type="text/css">
        .razorpay-payment-button{
            display: none;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.razorpay-payment-button').click();
        });
    </script>