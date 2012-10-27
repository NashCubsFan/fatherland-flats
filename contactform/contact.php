<?php 
 $to = " info@400fatherland.com"; 
 $subject = "Contact Us"; 
 $name = $_REQUEST['name'] ; 
 $email = $_REQUEST['email'] ; 
 $headers = "From: $email"; 
 $sent = mail($to, $subject, $name, $headers) ; 
 
 if($sent)
 {print "Your mail was sent successfully"; }
 else 
 {print "We encountered an error sending your mail"; }
 ?> 