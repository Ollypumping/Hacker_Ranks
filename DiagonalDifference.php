<?php
function diagonalDifference($arr) {
    $n = count($arr);
    $primary = 0;
    $secondary = 0;

    for ($i = 0; $i < $n; $i++) {
        $primary += $arr[$i][$i];
        $secondary += $arr[$i][$n - $i - 1];
    }

    return abs($primary - $secondary);
}


echo "Enter the size of the square matrix (n): ";
$n = (int) trim(fgets(STDIN));

$arr = [];
echo "Enter the matrix rows (space-separated):" . PHP_EOL;
for ($i = 0; $i < $n; $i++) {
    $arr_temp = trim(fgets(STDIN));
    $arr[] = array_map('intval', explode(' ', $arr_temp));
}

$result = diagonalDifference($arr);
echo "Diagonal difference: $result" . PHP_EOL;
?>
