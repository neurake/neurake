<?php
//get data from form  

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "tukaramkitekar401@gmail.com";
$subject = "Mail From website";
$txt ="First Name = ". $name . "\r\n   Last Name = ". $lastname . "\r\n Email = " . $email . "\r\n   Phone = ". $phone . "\r\n  Message =" . $message;
$headers = "From: noreply@neurake.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.php");
?>