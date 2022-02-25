<?php
function armstrong_number($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
echo "Is 152 Armstrong number? ".armstrong_number(10);
echo "\nIs 21 Armstrong number? ".armstrong_number(21);
echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";
?>
