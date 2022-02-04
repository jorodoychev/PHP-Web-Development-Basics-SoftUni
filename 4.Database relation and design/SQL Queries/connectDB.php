<?php

$servername = "localhost";
$username = "joro";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername; dbname=php_course", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

