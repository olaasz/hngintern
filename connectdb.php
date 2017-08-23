<?php
  function Connect()
  {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "12promote3";
    $dbname = "hngintern";

    //Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

    return $conn;
  }
 ?>
