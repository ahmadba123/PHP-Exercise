<?php
function add ($word){
    $total = 0;
    for($i=0;$i<strlen($word);$i++){
        $total += $word[$i];
    }

    echo $total;
}

add("12345");


?>