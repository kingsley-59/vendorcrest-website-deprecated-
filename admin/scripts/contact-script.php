<?php

$input_error = 0;
$db_errors = array();
$sendMailError = null;

// validate request values, verify if not empty
if(empty(isset($_POST["first_name"])) || empty(isset($_POST["email"])) || empty(isset($_POST["contact_subject"])) || empty(isset($_POST["contact_message"]))){
    echo "<strong>Error!</strong> All fields are required!\n";
    $input_error = 1;
    return;
}

// pass all request values to variable
$contact_name = $_POST["first_name"];
$contact_email = $_POST["email"];
$contact_subject = $_POST["contact_subject"];
$contact_message = $_POST["contact_message"];

// validate email with regex


//email messages
$mail_subject =  "Contact Confirmation - VendorCrest.";
$htmlMessage = "
    <p>Dear {$contact_name},</br>This is a confirmation that we have recieved your message. We will reply in less than 24 hours. If you haven't gotten a reply from us within 24 hours feel free to call our hotline +2340880099 or send us a direct message via email - info@vendorcrest.com </p>
    <p>Details of your message<br>Name: {$contact_name}<br>Email: {$contact_email}<br>Subject: {$contact_subject}<br>Message:<br>{$contact_message}<br><br>If there is any correction, please contact us at info@vendorcrest.com . Thank you for choosing VendorCrest!</p>
";
$altMessage = "Dear Customer, we have received your message. We will reply in less than 24 hours. Thank you for choosing VendorCrest!";

$parameters = array(
    "firstname" => $contact_name,
    "lastname" => null,
    "email_address" => $contact_email,
    "mail_subject" => $mail_subject,
    "html_message" => $htmlMessage,
    "alt_message" => $altMessage
);

// if no input error found, store message and send email
if ($input_error == 0){
    include "../config/database.php";
    $status = false;
    $insert_sql = "INSERT INTO contact_form_data (firstname, email, subject, message, status) VALUES ('$contact_name', '$contact_email', '$contact_subject', '$contact_message', '$status')";
    $result = $conn->query($insert_sql);
    if ($result){
        include "sendmail.php";
        $response = sendMailViaApi($parameters);
        //print_r($response->getData());

        if($response == "success"){
            echo "Thanks for contacting us. We reply within 24hrs via email.\n";
            
            $update_sql = "UPDATE contact_form_data SET status=true where email='$contact_email' ";
            $result = mysqli_query($conn, $update_sql);
            if(!$result){
                $e = "Status update error: ". $conn->error;
                array_push($db_errors, $e);
            }
        }else{
            echo "Sorry, your message didn't go through. Try again or contact us at info@vendorcrest.com to lay your complaints.";
        }
    }else{
        echo "An error occured! Please try again later.\n";
    }
}

?>