<?php
require_once "connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>
</head>
<body>

    <!-- //xu li them -->
    <?php 
      if(isset($_POST["submit"])) {
      $name = $_POST["name"];
      $age = $_POST["age"];

        if($name == "" || $age == "") {
          echo "Khong duoc de trong ten hoac tuoi";
        } else {
        $sql = "INSERT INTO `users`(`name`, `age`) VALUES ('$name', $age)";
        $qr = mysqli_query($conn, $sql);
        }

      }
    ?>
    <!-- den day -->


  <form action="index.php" method="POST">
    <input type="text" name="name" id="name" placeholder="Input name">
    <input type="text" name="age" id="age" placeholder="Input age">
    <input type="submit" name="submit" id="">
  </form>
<hr>
  <table style="width:50%">
    <tr>
      <th style="width: 35%; color: red;">Name</th>
      <th style="width: 35%; color: red;">Age</th>
      <th style="width: 35%; color: red;">Action</th>
    </tr>

    <!-- hien thu du lieu len bang -->
    <?php
    $sql = "SELECT * FROM users";
    $qr = mysqli_query($conn, $sql);
    while($rows = mysqli_fetch_assoc($qr)) {
    ?>
    <tr>
      <th><?php echo $rows["name"];?></th>
      <th><?php echo $rows["age"];?></th>
      <th><a href="edit.php?id=<?php echo $rows['id'];?>">Edit</a> | <a href="delete.php?id=<?php echo $rows['id'];?>">Delete</a></th>
    </tr>
    <?php } ?>
  </table>
</body>

</html>