<?php
$phone_book = [];
$input = explode(" ", readline());

while ($input[0] != "END") {
    if (count($input) == 3) {
        $phone_book[$input[1]] = $input[2];
    } else {
        if (array_key_exists($input[1], $phone_book)) {
            echo $input[1] . " -> " . $phone_book[$input[1]] . PHP_EOL;
        } else {
            echo "Contact $input[1] does not exist." . PHP_EOL;
        }
    }
    $input = explode(" ", readline());
}






