<?php
    $name=$_POST['name'];
    $visitor_mail =$_POST['email'];
    $message =$_POST['message'];


    $email_from = 'yoyohapisingh1999@gmail.com';
    $email_subject = '|*|*|*|New Response From Website';
    $email_body = "username : ".$name ."\nuserEmail:". $visitor_mail."\nUser message: ".$message;


    $email_to = 'pareshsahoo902@gmail.com';
    $headers ="From: " . $name . "<". $visitor_mail .">\r\n";

    mail($email_to,$email_subject,$email_body,$headers);
    header("Location: index.html")


?>