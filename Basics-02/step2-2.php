<?php
function greaterFn($num){
$r = $num > 30
? "greater than 30"
: ($num > 20
? "greater than 20"
: ($num >10
? "greater than 10"
: "Input a number atleast greater than 10!")); 
echo $num." : ".$r."\n";
}
greaterFn(40); // 40 is greater than 30
greaterFn(21); // 21 is greater than 20
greaterFn(12); // 12 is greater than 10
greaterFn(8);  // 8 is less than 10
?>