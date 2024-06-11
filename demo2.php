<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        $n = 12;

        $product = [
            "name"=>"iphone 15",
            "price"=>1000,
            "qty"=>5,
            "description"=>"San pham dang hot"
        ];
    ?>
    <h1>Hello World!</h1>
    <h2>So nguoi hien tai co trong lop: <?php echo $n ?></h2>
    <?php ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/iphone-15-pro-natural-titanium-pure-back-iphone-15-pro-natural-titanium-pure-front-2up-screen-usen.webp" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product["name"]?></h5>
            <h5 class="card-title"><?php echo $product["price"]?></h5>
            <h5 class="card-title"><?php echo $product["qty"]?></h5>
            <p class="card-text"><?php echo $product["description"]?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
</body>
</html>