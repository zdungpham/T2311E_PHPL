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
  //2. query SQL
  $search = isset($_GET["search"])?$_GET["search"]:"";

  $sql_cate = "SELECT * FROM categories WHERE name LIKE '%$search%'";
  $result_cate = $conn->query($sql_cate);
  while($row = $result_cate-> fetch_assoc()){
    $list[] = $row;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <form action="demo4.php" method="GET">
            <div class="row">
                <div class="col">
                    <input value="<?php echo $search; ?>" name="search" placeholder="Search" type="text" class="form-control"/>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary"> Submit</button>
                </div>
            <div>
        </form>
    </div>
    <?php
        $list[] = [[
            "name"=>"iphone 15",
            "price"=>1000,
            "qty"=>10,
            "description"=>"San pham dang hot"
        ],
        [
            "name"=>"iphone 14",
            "price"=>800,
            "qty"=>2,
            "description"=>"San pham dang hot"
        ]];
    ?>
    <a href="create_cate.php">Create a category</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Catergories</th>
            </tr>
        </thead>
        <tbody>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>

                
            </tr>
        </thead>
            <?php foreach($list as $item):?>
                <tr>
                <th scope="row"><?php echo $item["id"];?></th>
                    <td><?php echo $item["name"];?></td>
                    <td><a href="/edit_cate.php?id=<?php echo $item["id"];?>">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete this product')" 
                    href="/delete_cate.php?id=<?php echo $item["id"];?> " class="text-danger">Delete</a></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>