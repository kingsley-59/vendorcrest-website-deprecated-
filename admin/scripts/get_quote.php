<?php

$error = 0;

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
    send_email($email_address);
    echo "<span class=\"success\" style=\"color: green;\">Message sent successfully!</span><br>";
  }else{
    //echo "<span class=\"error\" style=\"color: red;\">Message not sent!</span>";
    echo "Error: ". $conn->error;
  }

}

function send_email($email){
  global $message;
  global $email_address;
  include "../config/database.php";
  $update_sql = "UPDATE quote_requests SET status=true where email='$email' ";
  $result = mysqli_query($conn, $update_sql);
  if($result){
    $to = $email_address;
    $subject = "";
    $msg = $message;
    $headers = "From: webmaster@example.com"."\r\n";
    $headers .= "Cc: myboss@example.com"."\r\n";

    mail($to, $subject, $msg, $headers);
    return true;
  }else{
    return false;
  }
}

//Use PhpMailer. Configure and set up.
//Use prepared statement for insert.


?>