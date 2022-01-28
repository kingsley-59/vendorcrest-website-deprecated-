<?php

$input_error = 0;
$db_errors = array();
$sendMailError = null;

if(empty(isset($_POST["first_name"])) || empty(isset($_POST["newsletter_email"])) || isset($_POST["auth_code"]) != "4498a29GqUI41zBk0764"){
    echo "<strong>Error!</strong> All fields are required!<br>";
    $input_error = 1;
}

$firstname = isset($_POST["first_name"]);
$newsletter_email = isset($_POST["newsletter_email"]);

// validate email with regex
// if (!preg_match(
//     "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
//     $newsletter_email)){
//         echo "<strong>Error!</strong> Invalid email address\n";
//         $input_error = 1;
// }

//email messages
$mail_subject =  "Newsletter Subscription Successful!";
$htmlMessage = "
    <p>Dear {$firstname},</br>This is a confirmation that you have successfully subscribed to our newsletter.</p>
    <p>Thank you for choosing VendorCrest!</p>
";
$altMessage = "Dear esteemed customer, This is a confirmation that you have successfully subscribed to our newsletter. Thank you for choosing VendorCrest!";

$parameters = array(
    "firstname" => $firstname,
    "lastname" => null,
    "email_address" => $newsletter_email,
    "mail_subject" => $mail_subject,
    "html_message" => $htmlMessage,
    "alt_message" => $altMessage
);
  
if ($input_error == 0){
    
    include "../config/database.php";
    $status = false;
    $insert_sql = "INSERT INTO newsletter_sub (firstname, email, status) VALUES ('$firstname', '$newsletter_email', '$status')";
    $result = $conn->query($insert_sql);
    if($result){
        include "sendmail.php";
        sendMail($parameters);

        if(sendMail($parameters)){
            echo "<strong>Success!</strong> Newsletter subscription successful.\n";
            $update_sql = "UPDATE newsletter_sub SET status=true where email='$newsletter_email' ";
            $result = mysqli_query($conn, $update_sql);
            if(!$result){
              $e = "Status update error: ". $conn->error;
              array_push($db_errors, $e);
            }
          }else{
            echo '<span class="error" style="color: red;">Message not sent! Please try again or contact our <a href="mailto:info@vendorcrest.com">customer care</a>.</span>';
          }
        
    }else{
        echo "<strong>Error!</strong> An error occurred! Please try again later.\n";
    }
}


?>