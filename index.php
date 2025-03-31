<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include 'php/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Parking Management System</title>
    <link rel="stylesheet" href="./css/style.css"> <!-- ✅ Fixed CSS Link -->
    <script src="./js/script.js" defer></script> <!-- ✅ Fixed JS Link -->
</head>
<body>

    <header>
        <h1>Online Parking Management System</h1>
        <nav>
            <ul>
                <li><a href="./php/book_slot.php">Book Parking</a></li>
                <li><a href="./php/available_slots.php">Available Slots</a></li>
                <li><a href="./php/login.php">Login</a></li>
                <li><a href="./php/register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Welcome to the Parking Management System</h2>
        <p>Book your parking slot online easily and conveniently.</p>
    </main>

    <footer>
        <p>&copy; 2025 Online Parking System. All rights reserved.</p>
    </footer>

</body>
</html>
