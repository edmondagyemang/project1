<?php

$vehicle_type = $_POST['vehicle_type'] ?? '';
$start_date = $_POST['start_date'] ?? '';
$end_date = $_POST['end_date'] ?? '';
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';


if (!$vehicle_type || !$start_date || !$end_date || !$name || !$email) {
    echo "All fields are required. Please go back and fill in all the information.";
    exit;
}

session_start();
$_SESSION['booking_confirmation'] = [
    'vehicle_type' => $vehicle_type,
    'start_date' => $start_date,
    'end_date' => $end_date,
    'name' => $name,
    'email' => $email
];


header("Location: services.php");
exit;
?>
