<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Booking</title>
</head>
<body>

<h2>Book a Vehicle</h2>

<!-- Booking form to collect vehicle and customer details -->
<form action="process_booking.php" method="POST">
    <label for="vehicle_type">Select Vehicle:</label>
    <select name="vehicle_type" id="vehicle_type">
        <option value="Economy">Economy</option>
        <option value="SUV">SUV</option>
        <option value="Luxury">Luxury</option>
        <option value="Van">Van</option>
    </select><br>

    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date" required><br>

    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date" required><br>

    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br>

    <input type="submit" value="Book Now">
</form>

</body>
</html>
