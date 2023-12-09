<?php
 include('ContactUni.html');
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$Subject=$_POST['subject'];
$Message=$_POST["Message"];

$email_from='jayashree02122000@gmail.com';


$email_subject='New Form Submission';
// $email_Body="Name: $name \n\n Email: $visitor;
$email_body="User name : "$name."\n.
             "User Email : "$visitor_email."\n.
             "Subject: "$Subject."\n. 
             "User Message: "$Message."\n;  
             
             $to='Contact@gmail.com';

             $headers="From:$email_from \r\n";

  $headers.="Reply_To:$visitor_email"\r\n;
  mail($to,$email_Subject,$email_body,$headers);
  headers("Location:ContactUni.html")

?> 


