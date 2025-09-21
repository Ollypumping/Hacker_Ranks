<?php

function aVeryBigSum($ar) {
    return array_sum($ar);
}


echo "Enter the number of elements: ";
$ar_count = (int) trim(fgets(STDIN));

echo "Enter the elements separated by spaces: ";
$ar_input = trim(fgets(STDIN));

$ar = array_map('intval', explode(' ', $ar_input));

$result = aVeryBigSum($ar);

echo "The sum is: $result" . PHP_EOL;
?>
