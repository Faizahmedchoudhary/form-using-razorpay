<?php

 $apiKey = "rzp_live_EvGOLcQHzXlY6t";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<?php

$phone = $_POST['phone-no'];
$email = $_POST['email-address'];
$name =  $_POST['name'];
$amount = $_POST['amount'];
?>


<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_POST['amount'] * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"//Replace with the order_id generated by you in the backend.
    
    data-name="Cubosquare"
    data-description=""
    data-image="https://www.cubosquare.in/wp-content/uploads/2021/03/Logo-cubosquare.jpg"
    data-prefill.name="<?php echo $name;?>"
    data-prefill.email="<?php echo $email;?>"
    data-prefill.contact="<?php  echo $phone;?>"
    data-theme.color="#499905"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<script>
    $(window).on("load", function() {
     jQuery(".razorpay-payment-button").click();
    });
  </script><script>
    $(window).on("load", function() {
     jQuery(".razorpay-payment-button").click();
    });
  </script>
