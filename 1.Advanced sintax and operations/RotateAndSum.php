<?php
$numbers = explode(" ", readline());
$count = intval(readline());

$result = array_fill(0, count($numbers), 0);

for ($i = 0; $i < $count; $i++) {
    $lastNumber = array_pop($numbers);
    array_unshift($numbers, $lastNumber);

    for ($j = 0; $j < count($numbers); $j++) {
        $result[$j] += $numbers[$j];
    }
}
echo implode(" ", $result);
