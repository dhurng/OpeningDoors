<?php
    
$from=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$resume=$_POST['resume'];


//$to = yangyangshi2010@gmail.com;

$to = dhurng@gmail.com
    
mail($to, $subject, $message, "From:".$email);

print "Your message has been sent: </br>$name</br>$subject</br>$message</br>$resume</p>";

?>