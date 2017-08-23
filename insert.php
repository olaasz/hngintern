<?php
require 'connectdb.php';

$conn = Connect();

$fullname = $conn->real_escape_string($_POST['u_fullname']);
$email = $conn->real_escape_string($_POST['u_email']);
$message = $conn->real_escape_string($_POST['message']);
$timestamp = date('Y-m-d G:i:s');

$query = "INSERT into c_form (u_fullname, u_email, message, time) VALUES('".$fullname."','".$email."','".$message."','".$timestamp."')";
$success = $conn->query($query);

if (!$success) {
  die("Couldn't enter data: ".$conn->error);
}
header( 'Location: thankyou.php') ;

$conn->close();
 ?>
