<?php
function check_palindone ($str){
if($str==strrev($str)){
echo "it's same ";
}
else{
    echo "it's not same ";
} 

}
echo(check_palindone("ahmad")."\n");
echo(check_palindone("madam")."\n");

?>