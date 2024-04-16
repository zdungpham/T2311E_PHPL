<?php
//code here
//echo "Hello World!"; //print

$x = 10; //Khai bao bien number
$s = "Hello"; //string
$t = true; //boolean

echo $s.$x;

function tinh_tong($a, $b){
    return  $a+$b;
}
function tinh_hieu($a, $b){
    echo $a -$b;
}
$z = tinh_tong(5,7);
tinh_hieu(7,5);