<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding-Planner</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="style.js" defer></script>
</head>

<body>
    <header class="head">
        <a href="#" class="logo"><i class="fas fa-heart"></i>&nbsp;Wedding<span>With</span>Planner&nbsp;<i class="fas fa-heart"></i></a>
        <nav class="navbar">
            <a href="#" class="active">Home</a>
            <a href="#service">Service</a>
            <a href="#vendor">Vendors</a>
            <a href="#venue">Venue</a>
            <a href="#invite">E-invites</a>
            <a href="#contact">Contact</a>
        </nav>
        <div id="menu-bar"><i class="fas fa-bars"></i></div>
    </header>

    <section class="home" id="home">
        <!-- Your home section content here -->
    </section>

    <section class="service" id="service">
        <!-- Your service section content here -->
    </section>

    <section class="vendor" id="vendor">
        <!-- Your vendor section content here -->
    </section>

    <section class="venue" id="venue">
        <!-- Your venue section content here -->
    </section>

    <section class="invite" id="invite">
        <!-- Your invite section content here -->
    </section>

    <footer id="contact">
        <!-- Your footer section content here -->
    </footer>
    
    <!-- Your JavaScript code here -->
    <script>
        // Your JavaScript code
    </script>
</body>

</html>

<?php
// Your PHP code can go here


$servername = "localhost";

$username = "your_username";

$password = "your_password";

$dbname = "your_database";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?>

$sql = "SELECT name, image, rating, price FROM vendors";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        echo "<div class='vendor-row'>";

        echo "<div class='rate'>" . $row["rating"] . " <i class='fa fa-star' aria-hidden='true'></i></div>";

        echo "<img src='" . $row["image"] . "' alt='img'>";

        echo "<h2>" . $row["name"] . "</h2>";

        echo "<p>" . $row["price"] . "</p>";

        echo "</div>";

    }

} else {

    echo "0 results";

}

$conn->close();

?>


?>
