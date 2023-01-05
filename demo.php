<?php
// code php viet tai day
echo "Hello world";

$x=10; // bien trong php, tuong tu nhu var
$x="hello";
$arr = [];
$arr[0] = 15;
$arr[1] = 20;
$arr[2] = 25;


for ($i = 0; $i<count($arr); $i++){
    //$arr[i]
}
foreach ($arr as $a){
    //$arr <=> $arr[$i]
}

$sv = [
  "name"=> "Nguyen Van An",
  "age"=> 19 ,
  "tel" => "0123456789"
];

echo $sv["name"];

foreach ($sv as $s) {
    echo "<h2>".$s."</h2>";
}

foreach ($sv as $k=>$v){
    echo "<h2>$k: $v</h2>";
}

echo json_encode($sv);// chuyen thanh dang json
function tinhtong($a,$b){
    return $a+$b;
}

