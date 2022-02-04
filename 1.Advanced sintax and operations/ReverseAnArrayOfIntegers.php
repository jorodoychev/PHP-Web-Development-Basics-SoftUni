<?php
$number = readline();
$arr = [];
for ($i = 0; $i < $number; $i++) {
    $arr[$i] = readline();
}
echo $str = implode(" ", array_reverse($arr));





