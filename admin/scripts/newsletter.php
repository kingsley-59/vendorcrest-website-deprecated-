<?php

$input_error = 0;
$db_errors = array();
$sendMailError = null;

if(empty(isset($_POST["first_name"])) || empty(isset($_POST["newsletter_email"])) || isset($_POST["auth_code"]) != "4498a29GqUI41zBk0764"){
    echo "<strong>Error!</strong> All fields are required!\n";
    $input_error = 1;
}

$firstname = $_POST["first_name"];
$newsletter_email = $_POST["newsletter_email"];

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
    $newsletter_email)){
        echo "<strong>Error!</strong> Invalid email address\n";
        $input_error = 1;
}
  
if ($input_error == 0){
    
    include "../config/database.php";
    $insert_sql = "INSERT INTO newsletter_sub (firstname, email) VALUES ('$firstname', '$newsletter_email')";
    $result = $conn->query($insert_sql);
    if($result){
        echo "<strong>Success!</strong> Newsletter subscription successful.\n";
    }else{
        echo "<strong>Error!</strong> An error occurred! Please try again later.\n";
    }
}


?>