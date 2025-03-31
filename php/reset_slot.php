<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $slot_id = $_POST['slot_id'];

    // Reset slot status
    $sql = "UPDATE parking_slots SET status='available' WHERE slot_id='$slot_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Slot reset successfully! <a href='../admin.php'>Go back</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
