<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Service - Services</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <!-- Page header -->
    <header>    
        <img src="images/logo.png" alt="Car Rental Service Logo" height="70" width="70" /> 
        <h1>Our Services</h1>
    </header>

    <!-- Navigation menu -->
    <nav>
        <div class="menuitem">
            <a href="index.php">
                <img src="images/home-icon.png" alt="Home icon" height="20" width="20" /> 
                <span class="menutext">Home</span>
            </a>
        </div>
        <div class="menuitem">
            <a href="services.php">
                <img src="images/services-icon.png" alt="Services icon" height="20" width="20" /> 
                <span class="menutext">Services</span>
            </a>
        </div>
        <div class="menuitem">
            <a href="about.php">
                <img src="images/about-icon.png" alt="About icon" height="20" width="20" /> 
                <span class="menutext">About</span>
            </a>
        </div>
        <div class="menuitem">
            <a href="contact.php">
                <img src="images/contact-icon.png" alt="Contact icon" height="20" width="20" />  
                <span class="menutext">Contact</span>
            </a>
        </div>
    </nav>

    <!-- Main Page Content -->
    <section>
        <h2>Book a Vehicle</h2>
        <p>Select a vehicle type and provide your details to book your rental vehicle.</p>

        <!-- Booking form to collect vehicle and customer details -->
        <form action="processorder.php" method="POST">
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

    </section>

    <!-- Page footer -->
    <footer>
        <p>&copy; 2024 Car Rental Service.<br />
        Please see our <a href="legal.php">legal information page</a>.</p>
    </footer>

</body>
</html>
