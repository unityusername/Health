<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group - Hay Fever</title>
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
        <li><a href="home.php">Home</a></li>
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
<a href="accessibility.php" class="accessibility-logo">
    <img src="accessibility.jpg" alt="Accessibility" />
</a>

<div class="layout">
    <img src="hay.jpg" alt="Banner" class="left-img">

    <div class="right-content">
        <!-- all your weather, article, risk boxes etc go here -->
         <h1>Advice on Hay Fever</h1>
         <h2 style="font-weight: normal;">Hay fever, also known as allergic rhinitis, is a common allergy caused by pollen from trees, grasses and weeds. It often leads to symptoms such as sneezing, a runny or blocked nose, itchy eyes and throat irritation. Symptoms tend to be worse during spring and summer when pollen counts are high, and they can sometimes affect sleep, concentration and daily activities. Although hay fever is not usually serious, it can be uncomfortable if not managed properly.

To help reduce symptoms, try to limit time outdoors when pollen levels are high, especially on warm, dry and windy days. Wearing sunglasses outside and keeping windows closed during peak pollen times can help prevent pollen from getting into your eyes and home. Showering and changing clothes after being outdoors may also reduce irritation. Over-the-counter antihistamines, nasal sprays and eye drops can provide relief, but if symptoms are severe or persistent, it’s a good idea to speak with a pharmacist or healthcare professional.</h2>
    </div>
</div>








<footer class="footer">
    <ul class="footer-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="policy.php">Policy</a></li>
        <li><a href="terms.php">Terms and conditions</a></li>
    </ul>
</footer>