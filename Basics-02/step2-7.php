<?php

$var = "i love Python  and i love PHP 
 Python ";

function changeString($var)
{
  if (strlen($var) > 1000) return $var;
  $var = str_replace("Python", "PHP", $var);

  return $var;
}

echo changeString($var);

?>