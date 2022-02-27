<?php
function armstrong_number($num) {
$rem=0;
$total=0;
$x=$num;
while($x !=0){
  $rem =$x % 10;
  $total = $total + $rem * $rem * $rem;
  $x=$x / 10;
}
  if ($total == $x) {
    echo "True \n";
  } else {
    echo "False\n";
  }
}
armstrong_number (10)
?>
