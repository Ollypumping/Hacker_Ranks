<?php

function compareTriplets($a, $b) {
    $aliceScore = 0;
    $bobScore = 0;

    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] > $b[$i]) {
            $aliceScore++;
        } elseif ($a[$i] < $b[$i]) {
            $bobScore++;
        }
    }

    return [$aliceScore, $bobScore];
}


echo "Enter Alice's triplet (three numbers separated by spaces): ";
$a_input = trim(fgets(STDIN));
$a = array_map('intval', explode(' ', $a_input));

echo "Enter Bob's triplet (three numbers separated by spaces): ";
$b_input = trim(fgets(STDIN));
$b = array_map('intval', explode(' ', $b_input));

$result = compareTriplets($a, $b);

echo "Scores (Alice Bob): " . implode(' ', $result) . PHP_EOL;
?>
