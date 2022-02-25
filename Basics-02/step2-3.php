<?php
function swap($var1,$var2){

$temp = $var1;
$var1 = $var2;
$var2 = $temp;
echo $var1 . " and " . $var2 ."\n" ;}
swap(3,2);
?>