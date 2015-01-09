<?php


$email = $_POST["email"];
$name = $_POST["name"];
$mssg = $_POST["message"];

$subject = "blushiftss.com message from " . $name . " at " . $email;

//$mail("support@blushiftss.com", $subject, $mssg);

$mail("scarter121988@gmail.com", $subject, $mssg);
?>