<?php

function solveMeFirst($a,$b){
  return $a + $b;  
  
}

$handle = fopen ("php://stdin","r");
echo "Enter your first number:\n";
$a = fgets($handle);
echo "Enter your second number:\n";
$b = fgets($handle);
$sum = solveMeFirst((int)$a,(int)$b);
echo "Sum = " . ($sum);
fclose($handle);
?>