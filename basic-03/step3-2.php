<?php
function factorial($num){
    
        $total =1;
        while($num > 1){
$total *=  $num;
$num--;
// echo $total."\n";
        }
        echo $total;
}
factorial(4);
?>