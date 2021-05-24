<?php
 
require ("PhpMailer/PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPAuth=true;
$mail->SMTPSecure = 'ssl';

$mail->Username='manohar@royalsouthernpackersandmovers.in';
$mail->Password='9842464933';

$mail->setFrom('manohar@royalsouthernpackersandmovers.in','RSPM');
$mail->addAddress('royalsouthernpackersmovers@gmail.com');
$mail->addReplyTo('manohar@royalsouthernpackersandmovers.in');

$mail->Subject="Contact from Website"; //Subject 
$name=$_POST["name"];
$phoneNumber=$_POST["phonenumber"];
$address=$_POST["address"];
$mail->Body="Name: $name\nContact Number: $phoneNumber\n\nAddress: $address";

if(!$mail->send()) {
    echo "<script>alert('We will get back to you soon');
     window.location = 'https://www.royalsouthernpackersandmovers.in';
       </script>";
}
else
{
       echo "<script>alert('We will get back to you soon');
     window.location = 'https://www.royalsouthernpackersandmovers.in';
       </script>";
}
?>