<?php
require_once "connectdb.php";
?>
<?php 
if(isset($_GET["id"])) {
  $id = $_GET["id"];
}
?>
<!-- //xu li them -->
<?php 
      if(isset($_POST["sua"])) {
      $name = $_POST["name"];
      $age = $_POST["age"];

        if($name == "" || $age == "") {
          echo "Khong duoc de trong ten hoac tuoi";
        }
        if(!$name == "" && !$age == "") {
        $sql = "UPDATE users SET name = '$name', age = '$age' WHERE id = $id ";
        $qr = mysqli_query($conn, $sql);
        header("location: index.php");
        }

      }
?>
<?php 
$sql = "SELECT * FROM users WHERE id = $id ";
$qr = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($qr);
?>


 <form action="" method="POST">
    <input type="text" name="name" id="name" placeholder="Input name" value="<?php echo $rows['name'];?>">
    <input type="text" name="age" id="age" placeholder="Input age" value="<?php echo $rows['age'];?>">
    <input type="submit" name="sua" id="">
  </form>