<?php 
session_start();// open session
// add product to cart
$cart  = isset($_SESSION["cart"]) ? $_SESSION["cart"] : [];

$id  = $_POST["product_id"];
$bought_qty = $_POST["bought_qty"];
$product_name = $_POST["product_name"];
$product_thumnail = $_POST["product_thumbnail"];
$product_price = $_POST["product_price"];
// kiem tra sản phẩm đã có trong giỏ chưa
// nếu có rồi thì tăng số lượng mua
// còn chưa có thì thêm vào 
if(isset($cart[$id])){
    $cart[$id] = $cart[$id] + $bought_qty;
}else{
    $cart[$id]= $bought_qty;
}
$_SESSION["last_added_product_id"] = $id;
// gán giá trị lại về session
$_SESSION["cart"] = $cart;
header("Location: /cart.php");