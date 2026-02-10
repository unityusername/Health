<?php
session_start();
require 'db.php';



//  must be logged in
if(!isset($_SESSION['user_id'])){
die("You must be logged in to make a booking.");
}

$user_id = $_SESSION['user_id'];

//  make sure form sent data
if(!isset($_POST['date']) || !isset($_POST['time'])){
die("Missing booking information.");
}

$date = $_POST['date'];
$time = $_POST['time'];

//  empty checks
if(empty($date) || empty($time)){
die("Please select a date and time.");
}

//  check booking within last 30 days
$stmt = $pdo->prepare("
SELECT * FROM bookings
WHERE user_id = ?
AND booking_date >= DATE_SUB(NOW(), INTERVAL 30 DAY)
");

$stmt->execute([$user_id]);

if($stmt->rowCount() > 0){
die("You already have a booking within 30 days.");
}

//  check if time slot already taken
$stmt = $pdo->prepare("
SELECT * FROM bookings
WHERE booking_date = ?
AND booking_time = ?
");

$stmt->execute([$date,$time]);

if($stmt->rowCount() > 0){
die("That time slot is already booked.");
}

//  insert booking
$stmt = $pdo->prepare("
INSERT INTO bookings (user_id, booking_date, booking_time)
VALUES (?,?,?)
");

$stmt->execute([$user_id,$date,$time]);

//  success
header("Location: riskassessment.php?success=1");
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health advice group - Booking Submitted</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <nav class="navbar">
    <!-- Logo -->
    <div class="nav-left">
        <img src="logo.jpg" alt="Logo" class="logo">
    </div>

    <!-- Middle links -->
    <ul class="nav-links">
        <li><a href="home.php" class="active">Home</a></li>
        <li><a href="advice.php">Advice</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="riskassessment.php">Risk assessment</a></li>
    </ul>

    <!-- Right links -->
    <div class="nav-right">
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>
</nav>


<!-- The footer with links at bottom for ease of use-->
<footer class="footer">
    <ul class="footer-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="policy.php">Policy</a></li>
        <li><a href="terms.php">Terms and conditions</a></li>
    </ul>
</footer>
</body>
</html>

