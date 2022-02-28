<?php
$str = "hello world";
$word = "hello";
function count_number($str,$word){
    $str = "Hello i'am ahmad and my age 24 old my last name is badawi";
    $arr = explode($word,$str);
    $count = sizeof($arr);
    return $count;
}
echo count_number($str,$word);
?>