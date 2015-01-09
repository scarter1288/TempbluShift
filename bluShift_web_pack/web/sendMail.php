<?php



$email = $_POST["email"];
$name = $_POST["name"];
$mssg = $_POST["mssg"];

$header;
$error = "";

$subject = "blushiftss.com message from " . $name . " at " . $email;

$test = " message: " . $mssg . " name: " . $name . " email: " . $email;
echo $test;

if(strcmp($email, "") == 0)
{
    //good message
    $header = "From: ". $email;
    $header .= "Content-Type: text/plain; charset=utf-8";
    
}
if(strcmp($name, "") == 0)
{
    
}
if(strcmp($mssg, "") == 0)
{
    
}
if(strcmp($error, ""))
{
    $success = mail("scarter121988@gmail.com", $subject, $mssg);
    if($success == true)
    {
        header('Location: ./index.html');
        echo "worked";
    }
}else
{
    require("./index.html");
    echo "did not work";
}

?>