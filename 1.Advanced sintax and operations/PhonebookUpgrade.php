<?php
$input = explode(" ", readline());
$phone_book = [];

while ($input[0] != "END") {
    if ($input[0] == "A") {
        if (array_key_exists($input[1], $phone_book)) {
            $phone_book[$input[1]] = $input[2];
        } else {
            $phone_book[$input[1]] = $input[2];
        }
    } else if ($input[0] == "S") {
        if (array_key_exists($input[1], $phone_book)) {
            echo $input[1] . " -> " . $phone_book[$input[1]] . PHP_EOL;

        } else {
            echo "Contact " . $input[1] . " does not exist." . PHP_EOL;
        }
    } else if ($input[0] == "ListAll") {
        ksort($phone_book);
        foreach ($phone_book as $item => $value) {
            echo $item . " -> " . $value . PHP_EOL;
        }
    }
    $input = explode(" ", readline());
}

