<?php
function sum($num) { 
    $sum = 0; 
    for ($i = 0; $i < strlen($num); $i++){ 
        $sum += $num[$i]; 
    } 
    return $sum; 
} 

// Driver Code 
$num = "54321"; 
echo sum($num); 
?>