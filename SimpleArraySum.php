<?php
function simpleArraySum($ar) {
    return array_sum($ar);
}

echo "Enter the number of elements in the array:\n";
$ar_count = intval(trim(fgets(STDIN)));

echo "Enter the elements of the array separated by spaces:\n";
$ar_temp = rtrim(fgets(STDIN));

$ar_strings = preg_split('/\s+/', $ar_temp, -1, PREG_SPLIT_NO_EMPTY);

//To check if the number of inputs matches the count
if (count($ar_strings) !== $ar_count) {
    fwrite(STDERR, "Error: Expected $ar_count numbers but got " . count($ar_strings) . "\n");
    exit(1);
}

// To check if each entry is an integer
foreach ($ar_strings as $value) {
    if (filter_var($value, FILTER_VALIDATE_INT) === false) {
        fwrite(STDERR, "Error: '$value' is not a valid integer\n");
        exit(1);
    }
}

$ar = array_map('intval', $ar_strings);

$result = simpleArraySum($ar);

echo "Sum = ". $result . "\n";
?>
