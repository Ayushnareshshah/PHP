<?php
//Method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 20.50;
$a[3] = "C";
$a[4] = "4";
//Method 2
$a[] = 10;
$a[] = 20;
$a[] = 20.50;
$a[] = "C";
$a[] = "4";
//Method 3
$a = array(10,20,30,"C","C++",10.50,"php");

echo $a[3];

for($i=0;$i<count($a);$i++) {
    echo "<br/>".$a[$i];
}

echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";