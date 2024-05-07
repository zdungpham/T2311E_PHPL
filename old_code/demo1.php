<?php
$arr = []; //array
$arr[] = 5;
$arr[] = "XYZ";
$arr[] = 18;
$arr[] = 22;

for($i = 0; $i < count($arr); $i++){
    echo $i."=".$arr[$i]."<br/>";
}

foreach($arr as $item){ //$item <=> $arr[i]
    echo $item."<br/>";
}

foreach($arr as $key=>$item){ //$item <=> $arr[i]
    echo $key."=".$item."<br/>";
}

$product = [
    "name"=>"iphone 15",
    "price"=>1000,
    "qty"=>5,
    "description"=>"San pham dang hot"
];

echo "<br/> Thong tin san pham: <br/>";
echo $product["name"]."-".$product["price"];

$list = [];
$list[] = [
    "name"=>"iphone 14",
    "price"=>800,
    "qty"=>2,
    "description"=>"San pham dang hot"
];

foreach($list as $p){
    echo "<br/> Thong tin san pham: <br/>";
    echo $p["name"]."-".$p["price"];

}