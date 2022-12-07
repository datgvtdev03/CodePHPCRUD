<?php
require "connectdb.php";
?>
   
    <?php 
      if(isset($_GET["id"])) {
        $id = $_GET["id"];
      }
      ?>

    <?php
    $sql = "DELETE FROM users WHERE id = $id";
    $qr = mysqli_query($conn, $sql);
    header("location: index.php");
    ?> 

  