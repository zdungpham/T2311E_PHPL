<?php
$id = $_GET["id"];

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

  $sql = "DELETE FROM categories WHERE id = $id";
  $conn->query($sql);
  
    header("Location: /demo4.php");
