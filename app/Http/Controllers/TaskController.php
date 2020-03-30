<?php 
function bilangan_segitiga($n) 
{ 
    $i; $j = 1; $k = 1;     
    for ($i = 1; $i <= $n; $i++)  
    { 
        echo(" " . $k . " "); 
        $j = $j + 1;   
        $k = $k + $j;  
    } 
} 
  
$n = 12; 
bilangan_segitiga($n); 
?>