<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group - Privacy Policy</title>
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

<div class="policy-container">
    <h1>Privacy Policy</h1>

    <p>Health Advice Group is committed to protecting your privacy and handling your personal information responsibly in accordance with UK data protection laws.</p>

    <h2>1. Information We Collect</h2>
    <p>We may collect personal information such as your name, email address, and account details when you register or use features on our website. We may also collect technical data such as IP address and browser type for security and analytics purposes.</p>

    <h2>2. How We Use Your Information</h2>
    <p>Your information is used to provide and improve our services, manage your account, respond to enquiries, and ensure website security. We do not sell your personal data to third parties.</p>

    <h2>3. Data Storage and Security</h2>
    <p>We take appropriate security measures to protect your personal information from unauthorised access, alteration, disclosure, or destruction.</p>

    <h2>4. Cookies</h2>
    <p>This website may use cookies to enhance user experience and analyse website traffic. You can choose to disable cookies through your browser settings.</p>

    <h2>5. Your Rights</h2>
    <p>Under UK data protection law, you have the right to request access to the personal data we hold about you, request corrections, or request deletion where applicable.</p>

    <h2>6. Third-Party Links</h2>
    <p>Our website may contain links to external websites. We are not responsible for the privacy practices of those sites.</p>

    <h2>7. Changes to This Policy</h2>
    <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page.</p>

    <p><strong>Last updated:</strong> <?php echo date("F Y"); ?></p>
</div>

<?php include 'footer.php'; ?>

</body>
</html>