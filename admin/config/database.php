<?php
$hostname     = "localhost"; // Enter Your Host Name

// $username     = "vendorc1_kingsley";      // Enter Your Database user username
// $password     = "kingsley-et-diva";          // Enter Your Database user Password
// $databasename = "vendorc1_admin_panel"; // Enter Your database Name

$username     = "root";      // Enter Your Database user username
$password     = "";          // Enter Your Database user Password
$databasename = "admin_panel"; // Enter Your database Name

$conn = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

