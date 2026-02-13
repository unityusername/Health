<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group - Accessibility</title>
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

<h2 style="text-align:center;">Accessibility Features</h2>

<form method="POST" action="save_accessibility.php">

<table class="accessibility-table">
<tr>
<th>Feature</th>
<th>Enable</th>
</tr>

<tr>
<td>Large Text</td>
<td>
<input type="checkbox" name="largeText" id="largeText"
<?php if(!empty($_SESSION['largeText'])) echo "checked"; ?>>
</td>
</tr>

<tr>
<td>High Contrast Mode</td>
<td>
<input type="checkbox" name="highContrast" id="highContrast"
<?php if(!empty($_SESSION['highContrast'])) echo "checked"; ?>>
</td>
</tr>

<tr>
<td>Dyslexia Friendly Font</td>
<td>
<input type="checkbox" name="dyslexiaFont" id="dyslexiaFont"
<?php if(!empty($_SESSION['dyslexiaFont'])) echo "checked"; ?>>
</td>
</tr>

</table>

<button type="submit" class="save-btn">Save Settings</button>

</form>

<script>
document.addEventListener("DOMContentLoaded", function(){

function applyToggle(id, className){
const el = document.getElementById(id);
if(!el) return;

document.body.classList.toggle(className, el.checked);

el.addEventListener("change", function(){
document.body.classList.toggle(className, this.checked);
});
}

applyToggle("largeText","large-text");
applyToggle("highContrast","high-contrast");
applyToggle("dyslexiaFont","dyslexia-font");

});
</script>

<?php include 'footer.php'; ?>

</body>
</html>
