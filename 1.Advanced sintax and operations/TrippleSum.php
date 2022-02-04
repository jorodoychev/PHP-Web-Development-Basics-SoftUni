<?php
$numbers = explode(' ', readline());

for ($i = 0; $i < count($numbers); $i++)
    $numbers[$i];

$tripleExists = false;

for ($i = 0; $i < count($numbers); $i++)
    for ($j = $i + 1; $j < count($numbers); $j++)
        for ($k = 0; $k < count($numbers); $k++)
            if ($numbers[$i] + $numbers[$j] == $numbers[$k]) {
                echo "{$numbers[$i]} + {$numbers[$j]} == {$numbers[$k]}\n";
                $tripleExists = true;
                break;
            }

if (!$tripleExists) {
    echo "No";
}