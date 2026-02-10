


<?php
session_start();
require 'db.php';

$loggedIn = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Health Advice Group - Risk Assessment</title>
<link rel="stylesheet" href="navbar.css">


</head>
<body>

<nav class="navbar">
<div class="nav-left">
<img src="logo.jpg" alt="Logo" class="logo">
</div>

<ul class="nav-links">
<li><a href="home.php">Home</a></li>
<li><a href="advice.php">Advice</a></li>
<li><a href="aboutus.php">About us</a></li>
<li><a href="riskassessment.php" class="active">Risk assessment</a></li>
</ul>

<div class="nav-right">
<a href="register.php">Register</a>
<a href="login.php">Login</a>
</div>
</nav>
<a href="accessibility.php" class="accessibility-logo">
    <img src="accessibility.jpg" alt="Accessibility" />
</a>


<h2 style="text-align:center;">Risk Assessment Booking</h2>

<div class="booking-container">

<!-- LEFT -->
<div class="left">
<?php if(!$loggedIn): ?>
<p>Login first to book</p>
<a href="login.php"><button class="login-btn">Login</button></a>
<?php endif; ?>
</div>

<!-- MIDDLE -->
<div class="middle">
<input type="date" id="date">

<p class="rules">
The booking can be cancelled at any time.
You cannot have another booking within 30 days of the previous booking.
</p>
</div>

<!-- RIGHT -->
<div class="right">

<p>Choose a time:</p>

<?php if($loggedIn): ?>

<form method="POST" action="submit_booking.php">

<input type="hidden" name="date" id="hiddenDate">

<button name="time" value="08:00">8:00 AM</button>
<button name="time" value="10:00">10:00 AM</button>
<button name="time" value="12:00">12:00 PM</button>
<button name="time" value="14:00">2:00 PM</button>
<button name="time" value="16:00">4:00 PM</button>
<button name="time" value="18:00">6:00 PM</button>

<button type="submit" class="submit">Submit</button>

</form>

<?php else: ?>

<button disabled>Login to select time</button>

<?php endif; ?>

</div>

</div>

<script>
const dateInput = document.getElementById("date");
const hiddenDate = document.getElementById("hiddenDate");

if(dateInput){
dateInput.addEventListener("change", function(){
hiddenDate.value = this.value;
});
}
</script>

<?php include 'footer.php'; ?>

</body>
</html>
