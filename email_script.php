<?php

$to = 'support@openingdoorsfoundation.org';
$name = $_POST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];


$resume = $_POST['resume'];


print "Your message has been sent: support@openingdoorsfoundation.org
    </br>
    From: $name at $email</br>
    About: $subject</br>
            $message</br>
            $resume</br>
    Thank you!";

$message = $message . " from: " . $email;


if (mail($to, $subject, $message)) {
    header("Location: index.php");
} else {
    echo "Sorry there seems to be an error.";
}

//  mail($)
//  //send email
//  mail($admin_email, "$subject", $comment, "From:" . $email);
//
//  //Email response
//  echo "Thank you for contacting us!";
//
//print "Your message has been sent:        </br>$name</br>$subject</br>$message</br>";
//      //redirect later
//  }
//
//if "email" variable is not filled out, display the form
?>
