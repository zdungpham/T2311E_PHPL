<?php
 //Receive data from FORM
    $name = $_POST["name"];
 //Code to save data

 $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "t2311e_php";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }
  //2. query SQL
    //2.1 Lấy tham số

    //2.2 Áp dụng giá trị tham số vào truy vấn
  $sql = "INSERT INTO categories(name) VALUES('$name')";
  $conn->query($sql);
  header("Location: /demo4.php");
