<?php
// Connect to MySQL database
$mysqli = new mysqli('localhost', 'username', 'password', 'car_rental_db');

// Update the booking status after payment success
$booking_id = $_GET['booking_id'];
$stmt = $mysqli->prepare("UPDATE bookings SET payment_status = 'Completed' WHERE id = ?");
$stmt->bind_param("i", $booking_id);
$stmt->execute();
$stmt->close();

echo "Payment successful! Your booking is confirmed.";
?>
