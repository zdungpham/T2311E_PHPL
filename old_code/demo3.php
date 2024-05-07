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
    //2.1 Lấy tham số
    $limit = isset($_GET["limit"]) && $_GET["limit"]!= "" ?$_GET["limit"]:20;
    $search = isset($_GET["search"])?$_GET["search"]:"";
    //2.2 Áp dụng giá trị tham số vào truy vấn
  $sql = "SELECT * FROM products WHERE name LIKE '%$search%' LIMIT $limit ";
  $result = $conn->query($sql);
  $list = [];
  while($row = $result->fetch_assoc()){
    $list[] = $row;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <a href="\"> Create a new product</a>
        <form action="demo3.php" method="GET">
            <div class="row">
                <div class="col">
                    <input value="<?php echo $search; ?>" name="search" placeholder="Search" type="text" class="form-control"/>
                </div>
                <div class="col">
                    <input value="<?php echo $limit; ?>" name="limit" placeholder="Limit" type="number" class="form-control"/>
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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
                <th scope="col"></th>
                
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                
                <th scope="row"><?php foreach($list as $p){echo $p[0]["name"];}?></th>
                <td><?php foreach($list as $p){echo $p[0]["price"];}?></td>
                <td><?php foreach($list as $p){echo $p[0]["qty"];}?></td>
                <td><?php foreach($list as $p){echo $p[0]["description"];}?></td>
            </tr>
            <tr>
                <th scope="row"><?php foreach($list as $p){echo $p[1]["name"];}?></th>
                <td><?php foreach($list as $p){echo $p[1]["price"];}?></td>
                <td><?php foreach($list as $p){echo $p[1]["qty"];}?></td>
                <td>@<?php foreach($list as $p){echo $p[1]["description"];}?></td>
            </tr> -->
            <?php foreach($list as $item):?>
                <tr>
                    <th scope="row"><?php echo $item["id"];?></th>
                    <td><?php echo $item["name"];?></td>
                    <td><?php echo $item["price"];?></td>
                    <td><?php echo $item["qty"];?></td>
                    <td><?php echo $item["description"];?></td>
                    <td><a href="/edit_product.php?id=<?php echo $item["id"];?>">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete this product')" href="/delete_product.php?id=<?php echo $item["id"];?> " class="text-danger">Delete</a></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</body>
</html>