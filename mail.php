
 <?php
$to = "salman778@manarat.ac.bd";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: salmanafrahman778@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?> 


