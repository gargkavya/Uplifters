<?php

 $apiKey="rzp_test_pwydrCEOgkT9lV";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_POST['amount'] * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR" //You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Uplifters"
    data-description="Uplifting India!"
    data-image=""
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#1a535c"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<style>
    .razorpay-payment-button {
        display: none;
    }
    </style>

<script type = "text/javascript">
    $(document).ready(function(){
     $('.razorpay-payment-button').click();
    });

    </script>