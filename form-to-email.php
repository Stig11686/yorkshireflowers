<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'yourname@yourwebsite.com';
	$email_subject = "New Website Enquiry submission";
	$email_body = $message;

    $to = 'stevenmarks75@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$message,$headers);


}

?>