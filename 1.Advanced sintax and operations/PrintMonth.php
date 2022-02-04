<?php
$monthNumber = readline();

$month = [1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

if ($monthNumber < 1 || $monthNumber > 12) {
    echo "Invalid Month!";
} else {
    foreach ($month as $item => $value) {
        if ($monthNumber == $item) {
            echo $value;
        }
    }
}
