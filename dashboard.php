<?php
include 'php/db_connect.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM parking_slots WHERE status='available'";
$result = $conn->query($sql);
?>

<h2>Available Parking Slots</h2>
<form action="php/book_slot.php" method="POST">
    <select name="slot_id">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <option value="<?= $row['slot_id'] ?>">Slot <?= $row['slot_number'] ?></option>
        <?php } ?>
    </select>
    <button type="submit">Book Slot</button>
</form>
<h2>Your Booked Slots</h2>
<?php
$sql = "SELECT bookings.booking_id, parking_slots.slot_number 
        FROM bookings 
        JOIN parking_slots ON bookings.slot_id = parking_slots.slot_id 
        WHERE bookings.user_id='$user_id'";
$result = $conn->query($sql);
?>

<?php if ($result->num_rows > 0) { ?>
    <form action="php/cancel_booking.php" method="POST">
        <select name="booking_id">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <option value="<?= $row['booking_id'] ?>">Slot <?= $row['slot_number'] ?></option>
            <?php } ?>
        </select>
        <button type="submit">Cancel Booking</button>
    </form>
<?php } else { ?>
    <p>No active bookings.</p>
<?php } ?>
