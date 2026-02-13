<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- The title and linking my css -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group - Home</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body class="
<?php if(!empty($_SESSION['largeText'])) echo 'large-text '; ?>
<?php if(!empty($_SESSION['highContrast'])) echo 'high-contrast '; ?>
<?php if(!empty($_SESSION['dyslexiaFont'])) echo 'dyslexia-font '; ?>
">




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
<!-- The picture across the screen to just make it look nicer-->
<img src="Doctor.jpg" alt="Banner" class="full-width-img">

<a href="accessibility.php" class="accessibility-logo">
    <img src="accessibility.jpg" alt="Accessibility" />
</a>


<div class="top-section">
    <!-- Left column: Weather + Health stacked -->
    <div class="left-column">
        <div class="weather-box">
            <h2>Weather in Hastings</h2>
            <p id="today">Loading...</p>
            <div id="forecast"></div>
        </div>
        <!-- Displays most common health issues-->
        <div class="health-box">
            <h2>The most common health issues currently:</h2>
            <ul id="healthIssues"></ul>
        </div>
    </div>

    <!-- Middle column: Risk Assessment (to the right of Health) -->
    <div class="riskassessment">
        <h2>Click book now to get the air quality in your home monitored 
</h2>
        <a href="riskassessment.php">
            <div class="risk-box">Book Now</div>
        </a>
    </div>

    <!-- Right column: Advice section -->
    <div class="advice-section">
        <h2>Advice for health articles</h2>
        <div class="advice-boxes">
            <a href="asthma.php"><div class="advice-box">Article for asthma</div></a>
            <a href="weight.php"><div class="advice-box">Article for weight loss</div></a>
            <a href="hayfever.php"><div class="advice-box">Article for hay fever</div></a>
        </div>
    </div>
</div>



<!-- The footer with links at bottom for ease of use-->
<footer class="footer">
    <ul class="footer-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="policy.php">Policy</a></li>
        <li><a href="terms.php">Terms and conditions</a></li>
    </ul>
</footer>
<!--linking my javascript file-->
<script src="weather.js"></script>
</body>
</html>
