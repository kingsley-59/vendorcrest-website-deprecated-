<?php

require "../../vendor/autoload.php";

require "../../includes/Exception.php";
require "../../includes/PHPMailer.php";
require "../../includes/SMTP.php";

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use \Mailjet\Resources;


function sendMail($parameters){
    // //call useful variables from outside the function
    // global $firstname;
    // global $lastname;
    // global $email_address;
    // global $mail_subject;
    // global $htmlMessage;
    // global $altMessage;
    
    //define variables from the array passed as the function argument
    $firstname = $parameters["firstname"];
    $lastname = $parameters["lastname"];
    $email_address = $parameters["email_address"];
    $mail_subject = $parameters["mail_subject"];
    $htmlMessage = $parameters["html_message"];
    $altMessage = $parameters["alt_message"];

    $parameters = array(
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email_address" => $email_address,
        "mail_subject" => $mail_subject,
        "html_message" => $htmlMessage,
        "alt_message" => $altMessage
    );
    //call the mail error variable
    global $sendMailError;
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
  
    try {
      //Server settings
      $mail->SMTPDebug = false;                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'mail.vendorcrest.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'info@vendorcrest.com';                     // SMTP username
      $mail->Password   = 'kingsley-et-diva';                               // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  
      //Recipients
      $mail->setFrom('info@vendorcrest.com', 'Vee from VendorCrest');
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
      //$mail->smtpClose();
      return true;
    } catch (Exception $e) {
      $sendMailError =  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      return false;
    }
}

function sendMailViaApi($parameters) {

  //define variables from the array passed as the function argument
  $firstname = $parameters["firstname"];
  $lastname = $parameters["lastname"];
  $email_address = $parameters["email_address"];
  $mail_subject = $parameters["mail_subject"];
  $htmlMessage = $parameters["html_message"];
  $altMessage = $parameters["alt_message"];
  
  $mj = new \Mailjet\Client('a5d4422bb9800ced19b80e844361ca93','3bf741f5ead841f4f55b47184e29273d',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "divine10646@gmail.com",
          'Name' => "Vee from Vendorcrest"
        ],
        'To' => [
          [
            'Email' => $email_address,
            'Name' => $firstname
          ]
        ],
        'Subject' => $mail_subject,
        'TextPart' => $altMessage,
        //'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'HTMLPart' => $htmlMessage,
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];

  $response = $mj->post(Resources::$Email, ['body' => $body]);
  // $response->success() && var_dump($response->getData());
  $_res = $response->success();
  $_data = (array) $response->getData();
  $status = $_data["Messages"][0]["Status"];
  
  return $status;
}

//Handle database and mail errors
//No code yet...


?>