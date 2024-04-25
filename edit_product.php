<?php
  // query to DB 
  //1. connect db
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

  $sql = "SELECT * FROM products WHERE id = $id";
  $result = $conn->query($sql);
  $product = null;
  while($row = $result-> fetch_assoc()){
    $product = $row;
  }

  if($product == null){
    header("Location: /notfound.php");
    return;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Edit product</h1>
    <form action="/update_product.php?id=<?php echo $id;?>" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input value="<?php echo $product["name"];?>" type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input value="<?php echo $product["price"];?>" type="number" name="price" class="form-control" >
    </div>
    <div class="mb-3">
        <label class="form-label">Quantity</label>
        <input value="<?php echo $product["qty"];?>" type="number" name="qty" class="form-control" >
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"> 
            <?php echo $product["description"];?>
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
</body>
</html>