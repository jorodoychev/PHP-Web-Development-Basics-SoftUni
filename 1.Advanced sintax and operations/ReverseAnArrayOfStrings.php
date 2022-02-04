<?php
//$numbers = explode(' ', readline());
//
//for ($i = 0; $i < count($numbers); $i++) {
//    echo $numbers[count($numbers) - 1 - $i] . ' ';
//}

echo implode(' ', array_reverse(explode(' ', readline())));