<?php session_start();

    require_once("functions/cart.php");
    //require_once("functions/place_order.php");
    $cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
    $products = get_cart();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("styles.php"); ?>
</head>
<body>
    <main>
        <div class="container">
            <h3>Thank you</h3>
            
            <?php foreach($order_info as $item):?>
            <ul>
                <li>Tên khách hàng: <?php echo $item["customer_name"] ?></li>
                <li>Số điện thoại: <?php echo $item["tel"] ?></li>
                <li>Địa chỉ: <?php echo $item["address"] ?></li>
                <li>Trạng thái: <?php echo $item["status"] ?></li>
                <li>Danh sách sản phẩm:</li>
            </ul>
            <?php endforeach ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Thumbnail</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Grand total</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($products as $item):?>
                    <tr>
                        <td><?php echo $item["id"] ?></td>
                        <td><img src="<?php echo $item["thumbnail"] ?>" class="thumbnail" width="80"/></td>
                        <td><?php echo $item["name"] ?></td>
                        <td><?php echo $item["price"] ?></td>
                        <td><?php echo $cart[$item["id"]] ?></td>
                        <td><?php echo $item["price"] * $cart[$item["id"]] ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            
        </div>
    </main>
</body>
</html>