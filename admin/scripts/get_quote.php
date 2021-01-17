<?php

$error = 0;
$db_errors = array();

if(empty(isset($_POST["first_name"])) ||
empty(isset($_POST["last_name"])) ||
empty(isset($_POST["email_address"])) ||
empty(isset($_POST["service"])) ||
empty(isset($_POST["phone_no"])) ||
empty(isset($_POST["phone_no"])) ||
empty(isset($_POST["message"]))){
  echo "<span class=\"error\" style=\"color: red;\">Fill in all necessary fields!</span><br>";
  $error = 1;
}

$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$email_address = $_POST["email_address"];
$service = $_POST["service"];
$tel = $_POST["phone_no"];
$message = $_POST["message"];

if (!preg_match(
  "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
  $email_address))
  {
      echo "\n Error: Invalid email address";
      $error = 1;
  }

if ($error == 0){
  echo "<span class=\"success\" style=\"color: green;\">Form submitted successfully!</span><br>";
  include "../config/database.php";
  $status = false;
  $insert_sql = "INSERT INTO quote_requests (firstname, lastname, email, phone, service, description, time, status) VALUES ('$firstname', '$lastname', '$email_address', '$tel', '$service', '$message', CURRENT_TIMESTAMP(), '$status')";
  $result = $conn->query($insert_sql);
  if($result){
    $mail_subject = "Your Quote Details - VendorCrest.";
    send_email($mail_subject);

    if (send_email($mail_subject)){
      echo "<span class=\"success\" style=\"color: green;\">Message sent successfully!</span><br>";
    }else{
      echo "<span class=\"error\" style=\"color: red;\">Message not sent!</span>";
    }
    
  }else{
    $e = "Quote insert error: ". $conn->error;
    array_push($db_errors, $e);
  }

}

function send_email($mailSubj){
  global $message;
  global $email_address;

  ini_set('SMTP','sbg103.truehost.cloud');
  ini_set('smtp_port',465);
  $to = $email_address;
  $subject = $mailSubj;
  $msg = $message;
  $headers = "From: hello@vendorcrest.com"."\r\n";
  $headers .= "Cc: divine10646@gmail.com"."\r\n";

  $send = mail($to, $subject, $msg, $headers);
  if ($send){
    return true;
    include "../config/database.php";
    $update_sql = "UPDATE quote_requests SET status=true where email='$email_address' ";
    $result = mysqli_query($conn, $update_sql);
    if(!$result){
      $e = "Status update error: ". $conn->error;
      array_push($db_errors, $e);
    }
  }else{
    return false;
  }
  
  
}

//Use PhpMailer. Configure and set up.
//Use prepared statement for insert.


?>