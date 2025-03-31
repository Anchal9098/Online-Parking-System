<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $slot_number = $_POST['slot_number'];

    $sql = "INSERT INTO parking_slots (slot_number, status) VALUES ('$slot_number', 'available')";
    if ($conn->query($sql) === TRUE) {
        echo "Slot added successfully! <a href='../admin.php'>Go back</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
