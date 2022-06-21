
<?php

//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$message= $_POST['message'];

$to = "salmanafrahman778@gmail.com";

$subject = "Mail From http://localhost";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  number = " . $number . "\r\n Message =" . $message;
$headers = "From: salman778@manarat.ac.bd" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thankyou.html");
}
//redirect







?>






