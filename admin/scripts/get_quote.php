<?php

$input_error = 0;
$db_errors = array();
$sendMailError = null;

date_default_timezone_set("Africa/Lagos");

if(empty(isset($_POST["first_name"])) ||
empty(isset($_POST["email_address"])) ||
empty(isset($_POST["service"])) ||
empty(isset($_POST["phone_no"])) ||
empty(isset($_POST["message"]))){
  echo "<span class=\"error\" style=\"color: red;\">Fill in all necessary fields!</span><br>";
  $input_error = 1;
}

//declare variables
$firstname = $_POST["first_name"];
$email_address = $_POST["email_address"];
$service = $_POST["service"];
$tel = $_POST["phone_no"];
$message = $_POST["message"];
$time = date("h:i:sa") . " " . date("l") . " " . date("d-m-Y");

//confirmation email messages
$mail_subject = "Quote Confirmation - VendorCrest.";
// $htmlMessage = "
// <p>Dear <b>{$firstname}</b>, We have recieved your quote. We will be communicating with you via this email address and/or your phone number - {$tel}<br>
// If this phone number is not correct, <a href=\"http://www.vendorcrest.com/\">click here</a> to sign in and manage your quote.</p>
// <p>Thank you for choosing Vendorcrest!</p>
// ";
$htmlMessage = '
<div style="margin: 0; padding: 10px 12px;font-size: 16px;font-weight: 500;border: 1px solid gray;border-radius: 10px;">
  <header style="text-align: center;background-color:darkcyan;min-height: 50px;"> <img src="https://www.vendorcrest.com/images/vc-logo.png" alt="vendorcrest logo" height="30px" width="35px"><span style="color: white;">   VendorCrest.</span></header>
  <section style="background-color: #cfcfcf;padding: 10px 15px;color: #444444;">
    <h3 style="text-align: center;">Quote Verification</h3>
    <p style="text-align: left;">
      Dear User,<br><br>We have received you quote request, we will keep in touch with you via this email and/or your phone number - {}.
      These are your quote details:<br>
      Name: {}<br>
      Email: {}<br>
      Phone no. : {}<br>
      Service: {}<br>
      Message: {}<br>
      Time: {}<br><br>
      If any there is a correction and/or adjustment to be made, please contact us at info@vendorcrest.com or call +234800900899.<br>
      Thank you for choosing VendorCrest!
    </p>
  </section>
  <footer style="text-align: center;background-color:darkcyan;color: white;min-height: 50px;">copyright {} vendorcrest.com</footer>
</div>
';
$altMessage = "Dear {$firstname}, we just recieved your quote. We will be communicating with you via this email address and your phone number - {$tel}<br>
If this phone number is not correct, contact us at info@vendorcrest.com to manage your quote. 
Thank you for choosing Vendorcrest!";

//validate email with regular expression
if (!preg_match(
  "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
  $email_address))
  {
      echo "\n Error: Invalid email address";
      $input_error = 1;
  }

//email function parameters
$parameters = array(
    "firstname" => $firstname,
    "lastname" => null,
    "email_address" => $email_address,
    "mail_subject" => $mail_subject,
    "html_message" => $htmlMessage,
    "alt_message" => $altMessage
);

if ($input_error == 0){
  echo "<span class=\"success\" style=\"color: green;\">Form submitted successfully!</span><br>";
  include "../config/database.php";
  $status = false;
  $insert_sql = "INSERT INTO quote_requests (firstname, lastname, email, phone, service, description, time, status) VALUES ('$firstname', '$lastname', '$email_address', '$tel', '$service', '$message', CURRENT_TIMESTAMP(), '$status')";
  $result = $conn->query($insert_sql);
  if($result){
    include "sendmail.php";
    sendMail($parameters);  //send email

    if(sendMail($parameters)){
      echo "<span class=\"success\" style=\"color: green;\">Message sent successfully!</span><br>";
      $update_sql = "UPDATE quote_requests SET status=true where email='$email_address' ";
      $result = mysqli_query($conn, $update_sql);
      if(!$result){
        $e = "Status update error: ". $conn->error;
        array_push($db_errors, $e);
      }
    }else{
      echo "<span class=\"error\" style=\"color: red;\">Message not sent! Please try again or contact our <a href=\"#\">customer care</a>.</span>";
    }
    
  }else{
    $e = "Quote insert error: ". $conn->error;
    array_push($db_errors, $e);
  }

}


?>

