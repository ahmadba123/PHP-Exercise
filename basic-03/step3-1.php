<?php
function stars (){
    $x=1;
    $count=0;
    while($x<=8){
        echo str_repeat("*", $x)."\n";
        $x++;
    }
}
print stars()

?>