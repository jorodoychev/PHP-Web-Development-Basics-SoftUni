<?php

include_once 'connectDB.php';

if (isset($_GET['first_name'], $_GET['last_name'], $_GET['student_number'], $_GET['phone'])) {
    $first_name = htmlspecialchars($_GET['first_name']);
    $last_name = htmlspecialchars($_GET['last_name']);
    $student_number = trim($_GET['student_number']);
    $phone = trim($_GET['phone']);
    $home_address = htmlspecialchars($_GET['home_address']);
    $date_of_record = date('Y-m-d H:i:s');
    $is_active = true;


    try {
        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO php_course.students (first_name, last_name, student_number, phone, home_address, date_of_record, date_of_last_data_change, is_active, motivation_letter, notes)
  VALUES (:first_name, :last_name, :student_number, :phone, :home_address, :date_of_record, :date_of_last_data_change, :is_active, :motivation_letter, :notes)");
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':student_number', $student_number);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam('home_address', $home_address);
        $stmt->bindParam(':date_of_record', $date_of_record);
        $stmt->bindParam(':date_of_last_data_change', $date_of_last_data_change);
        $stmt->bindParam(':is_active', $is_active);
        $stmt->bindParam(':motivation_letter', $motivation_letter);
        $stmt->bindParam(':notes', $notes);

        // insert a row
        $stmt->execute();
        echo "New records created successfully";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;

}