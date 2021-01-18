<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

$mailSubj = "PHP mail test";

function send_email($mailSubj){
    // global $message;
    // global $email_address;
    $message = "PHP mail worked!";
    $email_address = "divine10646@gmail.com";
  
    // ini_set('SMTP','sbg103.truehost.cloud');
    // ini_set('smtp_port',465);
    $to = $email_address;
    $subject = $mailSubj;
    $msg = $message;
    $headers = "From: hello@vendorcrest.com"."\r\n";
    $headers .= "Cc: divine10646@gmail.com"."\r\n";
  
    $send = mail($to, $subject, $msg, $headers);
    if ($send){
        echo "The mail was sent successfully!";
      return true;
    }else{
        echo "Couldn't send mail!";
      return false;
    }
    
    
  }
send_email($mailSubj);


?>