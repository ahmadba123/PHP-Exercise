<?php
function is_Power_of_two($n)
{
   if(($n & ($n - 1)) == 0)
    {
		return "$n is power of 2";
    }
   else if(($n & ($n - 1)) !== 0)
    {
		return "$n is not power of 2";
    }
    else{
        print_r(is_Power_of_two(4)."\n");
    
}}
echo(is_Power_of_two(4)."\n");
echo(is_Power_of_two(128)."\n");
echo(is_Power_of_two(15)."\n");
?>