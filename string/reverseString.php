<?php 
function reverseStr(&$str) 
{ 
    $n = strlen($str); 
  
    // Swap character starting  
    // from two corners 
    for ($i = 0; $i < $n / 2; $i++) 
        //swap the string 
        list($str[$i], $str[$n - $i - 1]) = array($str[$n - $i - 1], $str[$i]); 
} 
  
$str = "zulkepretes"; 
  
reverseStr($str); 
echo $str;  // Print output.

?> 
