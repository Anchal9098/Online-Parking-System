<?php
include 'php/db_connect.php';
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    die("Access Denied");
}

// Fetch slots
$sql = "SELECT * FROM parking_slots";
$result = $conn->query($sql);
?>

<h2>Manage Parking Slots</h2>
<table border="1">
    <tr>
        <th>Slot Number</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['slot_number'] ?></td>
        <td><?= $row['status'] ?></td>
        <td>
            <?php if ($row['status'] == 'booked') { ?>
                <form action="php/reset_slot.php" method="POST">
                    <input type="hidden" name="slot_id" value="<?= $row['slot_id'] ?>">
                    <button type="submit">Reset</button>
                </form>
            <?php } ?>
        </td>
    </tr>
    <?php } ?>
</table>

<form action="php/add_slot.php" method="POST">
    <input type="text" name="slot_number" placeholder="Enter slot number" required>
    <button type="submit">Add Slot</button>
</form>
