<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group - Terms And Conditions</title>
    <link rel="stylesheet" href="navbar.css">
</head>

<body class="
<?php if(!empty($_SESSION['largeText'])) echo 'large-text '; ?>
<?php if(!empty($_SESSION['highContrast'])) echo 'high-contrast '; ?>
<?php if(!empty($_SESSION['dyslexiaFont'])) echo 'dyslexia-font '; ?>
">

<nav class="navbar">
    <div class="nav-left">
        <img src="logo.jpg" alt="Logo" class="logo">
    </div>

    <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="advice.php">Advice</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="riskassessment.php">Risk assessment</a></li>
    </ul>

    <div class="nav-right">
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>
</nav>

<img src="Doctor.jpg" alt="Banner" class="full-width-img">

<a href="accessibility.php" class="accessibility-logo">
    <img src="accessibility.jpg" alt="Accessibility" />
</a>

<div class="terms-container">
    <h1>Terms and Conditions</h1>

    <p>Welcome to Health Advice Group. By accessing and using this website, you agree to comply with and be bound by the following Terms and Conditions. If you do not agree with these terms, please do not use this website.</p>

    <h2>1. Use of Website</h2>
    <p>This website provides general health information for educational purposes only. It does not replace professional medical advice, diagnosis, or treatment. Always seek advice from a qualified healthcare professional.</p>

    <h2>2. User Accounts</h2>
    <p>You are responsible for maintaining the confidentiality of your login details and for all activities under your account. We reserve the right to suspend or remove accounts that misuse the website.</p>

    <h2>3. Risk Assessment Tool</h2>
    <p>Any results from the risk assessment tool are informational only and must not be relied upon as medical advice or diagnosis.</p>

    <h2>4. Intellectual Property</h2>
    <p>All website content including text, images, and logos belongs to Health Advice Group unless stated otherwise. You may not copy or distribute content without permission.</p>

    <h2>5. Limitation of Liability</h2>
    <p>Health Advice Group is not responsible for any loss or damage arising from use of this website or reliance on its content.</p>

    <h2>6. Privacy</h2>
    <p>We handle personal information in accordance with our Privacy Policy and applicable UK data protection laws.</p>

    <h2>7. Changes to Terms</h2>
    <p>We may update these Terms and Conditions at any time. Continued use of the website means you accept any updated terms.</p>

    <p><strong>Last updated:</strong> <?php echo date("F Y"); ?></p>
</div>

<?php include 'footer.php'; ?>

</body>
</html>