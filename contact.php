<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" type="text/css" rel="stylesheet">
    <title>Contact Us - Car Rental Service</title>
</head>
<body>
    <!-- Page header -->
    <header>
        <img src="images/logo.png" alt="Car Rental Service Logo" height="70" width="70" />
        <h1>Contact Us</h1>
    </header>

    <!-- Navigation menu -->
    <nav>
        <div class="menuitem"><a href="index.php">Home</a></div>
        <div class="menuitem"><a href="services.php">Services</a></div>
        <div class="menuitem"><a href="about.php">About</a></div>
        <div class="menuitem"><a href="contact.php">Contact</a></div>
    </nav>

;l    <section>
        <h2>Get in Touch</h2>
        <form action="process_order.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="feedback">Feedback:</label><br>
            <textarea id="feedback" name="feedback" required></textarea><br>
            
            <input type="submit" value="Submit">
        </form>
    </section>

    <!-- Page footer -->
    <footer>
        <p>&copy; 2024 Car Rental Service.<br />
        Please see our <a href="legal.php">legal information page</a>.</p>
    </footer>

</body>
</html>
