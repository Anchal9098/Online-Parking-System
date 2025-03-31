<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];

    // Get slot_id from the booking record
    $sql = "SELECT slot_id FROM bookings WHERE booking_id='$booking_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $slot_id = $row['slot_id'];

        // Delete the booking
        $conn->query("DELETE FROM bookings WHERE booking_id='$booking_id'");

        // Set slot as available
        $conn->query("UPDATE parking_slots SET status='available' WHERE slot_id='$slot_id'");

        echo "Booking cancelled successfully! <a href='../dashboard.php'>Go back</a>";
    } else {
        echo "Invalid booking!";
    }
}
?>
