<?php
$id = $_GET["id"];

$name = $_POST["name"];
$price = $_POST["price"];
$qty = $_POST["qty"];
$description = $_POST["description"];

$host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "t2311e_php";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }
  //2. query SQL (truy vấn)
  $id = $_GET["id"];

  $sql = "UPDATE products SET name = '$name', price = $price, qty = $qty, description='$description' WHERE id = $id";
  $conn->query($sql);
  
    header("Location: /demo3.php");
