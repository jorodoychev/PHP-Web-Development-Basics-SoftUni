<?php
$n = intval(readline());
$k = intval(readline());

$nums[0] = 1;
for ($i = 1; $i < $n; $i++) {
    $sum = 0;
    for ($prev = $i - $k; $prev <= $i - 1; $prev++)
        if ($prev >= 0)
            $sum += $nums[$prev];
    $nums[$i] = $sum;
}
for ($i = 0; $i < $n; $i++)
    echo $nums[$i] . " ";
