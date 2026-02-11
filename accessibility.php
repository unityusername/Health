<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group - Accessibility</title>
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
        <li><a href="riskassessment.php">Risk assessment</a></li>
    </ul>

    <div class="nav-right">
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>
</nav>

<h2 style="text-align:center;">Accessibility Features</h2>

<!-- Checkboxes with the text saying which accessibility feature it activates -->
<form method="POST" action="save_accessibility.php">

    <table class="accessibility-table">
        <tr>
            <th>Feature</th>
            <th>Enable</th>
        </tr>

        <tr>
            <td>Large Text</td>
            <td><input type="checkbox" name="largeText" id="largeText"></td>
        </tr>

        <tr>
            <td>High Contrast Mode</td>
            <td><input type="checkbox" name="highContrast" id="highContrast"></td>
        </tr>
    
        <tr>
            <td>Dyslexia Friendly Font</td>
            <td><input type="checkbox" name="dyslexiaFont" id="dyslexiaFont"></td>
        </tr>
    </table>

    <button type="submit" class="save-btn">Save Settings</button>



</form>

<script>
document.getElementById("largeText").addEventListener("change", function(){
    document.body.classList.toggle("large-text", this.checked);
});

document.getElementById("highContrast").addEventListener("change", function(){
    document.body.classList.toggle("high-contrast", this.checked);
});

document.getElementById("dyslexiaFont").addEventListener("change", function(){
    document.body.classList.toggle("dyslexia-font", this.checked);
});
</script>

<?php include 'footer.php'; ?>

</body>
</html>