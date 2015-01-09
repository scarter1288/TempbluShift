<?php


$email = $_POST["email"];
$name = $_POST["name"];
$mssg = $_POST["message"];

$subject = "blushiftss.com message from " . $name . " at " . $email;

//$mail("support@blushiftss.com", $subject, $mssg);

if($mail("scarter121988@gmail.com", $subject, $mssg))
{
    $echo "test sucessful";
}else
{
    $echo "test unsuccessful";
}
?>