<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "demo";
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(!isset($conn)) {
    echo die("Khong the ket noi db");
  }
?>