<?php

require "includes/Exception.php";
require "includes/PHPMailer.php";
require "includes/SMTP.php";

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$input_error = 0;
$db_errors = array();
$sendMailError = null;

if(empty(isset($_POST["first_name"])) ||
empty(isset($_POST["last_name"])) ||
empty(isset($_POST["email_address"])) ||
empty(isset($_POST["service"])) ||
empty(isset($_POST["phone_no"])) ||
empty(isset($_POST["message"]))){
  echo "<span class=\"error\" style=\"color: red;\">Fill in all necessary fields!</span><br>";
  $input_error = 1;
}

$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$email_address = $_POST["email_address"];
$service = $_POST["service"];
$tel = $_POST["phone_no"];
$message = $_POST["message"];

//confirmation email messages
$mail_subject = "Quote Confirmation - VendorCrest.";
$htmlMessage = "
<p>Dear <b>{$firstname}</b>, we just recieved your quote. We will be communicating with you via this email address and your phone number - {$tel}<br>
If this phone number is not correct, <a href=\"http://www.vendorcrest.com/\">click here</a> to sign in and manage your quote.</p>
<p>Thank you for choosing Vendorcrest!</p>
";
$altMessage = "Dear {$firstname}, we just recieved your quote. We will be communicating with you via this email address and your phone number - {$tel}<br>
If this phone number is not correct, click here (http://www.vendorcrest.com) to sign in and manage your quote. 
Thank you for choosing Vendorcrest!";

if (!preg_match(
  "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
  $email_address))
  {
      echo "\n Error: Invalid email address";
      $input_error = 1;
  }

if ($input_error == 0){
  echo "<span class=\"success\" style=\"color: green;\">Form submitted successfully!</span><br>";
  include "../config/database.php";
  $status = false;
  $insert_sql = "INSERT INTO quote_requests (firstname, lastname, email, phone, service, description, time, status) VALUES ('$firstname', '$lastname', '$email_address', '$tel', '$service', '$message', CURRENT_TIMESTAMP(), '$status')";
  $result = $conn->query($insert_sql);
  if($result){
    sendMail();

    if(sendMail()){
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

function sendMail(){
  //call useful variables from outside the function
  global $firstname;
  global $lastname;
  global $email_address;
  global $mail_subject;
  global $htmlMessage;
  global $altMessage;

  //call the mail error variable
  global $sendMailError;
  
  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->SMTPDebug = 1;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.vendorcrest.com ';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@vendorcrest.com';                     // SMTP username
    $mail->Password   = 'kingsley-et-diva';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@vendorcrest.com', 'Vendorcrest Digital');
    $mail->addAddress($email_address, $firstname." ".$lastname);     // Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    $mail->addBCC('divine10646@gmail.com');
    $mail->addBCC('somaoloto@gmail.com');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $mail_subject;
    $mail->Body    = $htmlMessage;
    $mail->AltBody = $altMessage;

    $mail->send();
    $mail->smtpClose();
    return true;
  } catch (Exception $e) {
    $sendMailError =  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    return false;
  }
}

//Handle database and mail errors
//No code yet...

?>