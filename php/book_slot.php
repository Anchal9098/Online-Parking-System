<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php'; // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Parking Slot</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- ✅ Ensure Correct Path -->
</head>
<body>

    <header>
        <h1>Book a Parking Slot</h1>
    </header>

    <main>
        <form action="process_booking.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="vehicle_number">Vehicle Number:</label>
            <input type="text" id="vehicle_number" name="vehicle_number" required>

            <label for="slot">Choose Slot:</label>
            <select id="slot" name="slot" required>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
            </select>

            <label for="time">Booking Time:</label>
            <input type="datetime-local" id="time" name="time" required>

            <button type="submit">Book Slot</button>
        </form>
    </main>

</body>
</html>
