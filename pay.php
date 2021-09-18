<?php
$purpose = $_POST["purpose"];
$amount = $_POST["amount"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

include 'instamojo/Instamojo.php';
// write your own API Key and Auth Token
$api = new Instamojo\Instamojo('f47a88f56cc3e7f4ee18c491b95302b5','320b4297ee0cb2d73a47227a53c888fc', 'https://www.instamojo.com/api/1.1/');

try{
	$response = $api->paymentRequestCreate(array(
		"purpose" => $purpose,
		"amount" => $amount,
		"donor_name" => $name,
		"phone" => $phone,
		"send_email" => true,
		"send_sms" => true,
		"email" => $email,
		"allow_repeated_payments" => false,
		// add your hosted website url with the redirected page. here the redirected page is thankyou.php
		// e.g. http://pgi.epizy.com/thankyou.php
		// "redirect_url" => "#href",
		

	));
	$pay_url = $response['longurl'];
	header("location:$pay_url");
}
catch(Exception $e){
	print('Error: ' .$e->getMessage());
}
?>