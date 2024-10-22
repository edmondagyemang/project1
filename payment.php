<?php
// Retrieve booking information for payment
$amount = $_GET['amount'];
$booking_id = $_GET['booking_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
</head>
<body>

<h2>Pay for Your Booking</h2>
<p>Total Amount: $<?php echo number_format($amount, 2); ?></p>

<!-- PayPal Payment Form -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="your-paypal-email@example.com">
    <input type="hidden" name="item_name" value="Car Rental Booking #<?php echo $booking_id; ?>">
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="return" value="payment_success.php?booking_id=<?php echo $booking_id; ?>">
    <input type="hidden" name="cancel_return" value="payment_cancel.php?booking_id=<?php echo $booking_id; ?>">
    <input type="submit" value="Pay with PayPal">
</form>

</body>
</html>
