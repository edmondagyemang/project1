<?php include('header.php'); ?>

<section>
    <h2>Available Cars</h2>
    <div class="car-list">
        <?php
        // Connect to the database
        $mysqli = new mysqli('localhost', 'username', 'password', 'car_rental_db');

        // Check connection
        if ($mysqli->connect_errno) {
            die("Failed to connect to MySQL: " . $mysqli->connect_error);
        }

        // Fetch car types
        $result = $mysqli->query("SELECT * FROM car_types");
        while ($row = $result->fetch_assoc()) {
            echo "<div class='car-item'>";
            echo "<h3>{$row['name']}</h3>";
            echo "<img src='{$row['image']}' alt='{$row['name']}' height='200'>";
            echo "<p>{$row['description']}</p>";
            echo "</div>";
        }
        ?>
    </div>
</section>

<?php include('footer.php'); ?>
