<?php

    $name=$_POST['name'];//store name
    $visitor_email=$_POST["email"];//store name
    $message=$_POST['message'];//store name
    
    $email_form='t0269675@my.ntu.ac.uk';//email that will send this form to me
    //email form that i will receive
    $email_subject="Pawster Contact";
    $email_body="Name: $name.\n";
                "User email: $visitor_email.\n";
                "User message: $message.\n";
    $to="prang.k.ch@gmail.com";//email that will recieve this form

    $headers= "Form: $email_form \r\n";
    $headers .="Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");//bring back to contact page 


?>