<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group - About Us</title>
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
        <li><a href="home.php" >Home</a></li>
        <li><a href="advice.php">Advice</a></li>
        <li><a href="aboutus.php"  class="active">About us</a></li>
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
    <img src="hospital.jpg" alt="Banner" class="left-img">

    <div class="right-content">
        <!-- all your weather, article, risk boxes etc go here -->
         <h1>About us</h1>
         <h2 style="font-weight: normal;">Health Advice Group is a charity dedicated to helping people understand and manage the impact that weather and environmental conditions can have on their health and wellbeing. Our mission is to make reliable, easy-to-understand health information accessible to everyone, empowering individuals and communities to make safer and more informed decisions in their daily lives.

We provide practical advice on dealing with extreme weather conditions, including heatwaves, cold temperatures, storms, and seasonal changes. Our resources also cover common environmental health concerns such as asthma, hay fever, allergies, and other conditions affected by air quality and climate factors. In addition, we support individuals and families by offering guidance and risk assessments to help create safer and healthier home environments.

Our digital platform brings together real-time weather forecasting, air quality monitoring, and personalised health guidance in one place. By combining environmental data with expert advice, we aim to help users better understand potential health risks and take preventative action when needed.

Health Advice Group is committed to inclusivity and accessibility, ensuring that our services can support people with a wide range of needs. Through innovation, education, and community support, we strive to improve public awareness of environmental health and promote healthier living for everyone.</h2>
    </div>
</div>






<?php include 'footer.php'; ?>

</body>
</html>