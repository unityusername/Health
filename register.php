<?php session_start(); ?>

<?php
session_start();
require 'db.php';

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$confirm_email = trim($_POST['confirm_email']);
$password = $_POST['password'];

if(empty($username)||empty($email)||empty($confirm_email)||empty($password)){
$message="All fields required.";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$message="Invalid email.";
}
elseif($email!==$confirm_email){
$message="Emails do not match.";
}
elseif(strlen($password)<8){
$message="Password must be 8+ characters.";
}
else{

$hashed=password_hash($password,PASSWORD_DEFAULT);

$stmt=$pdo->prepare("INSERT INTO users(username,email,password)
VALUES(:username,:email,:password)");

try{
$stmt->execute([
':username'=>$username,
':email'=>$email,
':password'=>$hashed
]);
$message="Registration successful!";
}catch(PDOException $e){
$message="Username or email exists.";
}

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register - Health Advice Group</title>
<link rel="stylesheet" href="navbar.css">

<a href="accessibility.php" class="accessibility-logo">
    <img src="accessibility.jpg" alt="Accessibility" />
</a>

<style>
.register-box{
width:350px;
margin:80px auto;
padding:30px;
background:white;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
}
.register-box input{
width:90%;
padding:10px;
margin:10px 0;
}
.error{color:red;}
</style>

</head>
<body class="
<?php if(!empty($_SESSION['largeText'])) echo 'large-text '; ?>
<?php if(!empty($_SESSION['highContrast'])) echo 'high-contrast '; ?>
<?php if(!empty($_SESSION['dyslexiaFont'])) echo 'dyslexia-font '; ?>
">


<nav class="navbar">
<div class="nav-left">
<img src="logo.jpg" class="logo">
</div>

<ul class="nav-links">
<li><a href="home.php">Home</a></li>
<li><a href="advice.php">Advice</a></li>
<li><a href="aboutus.php">About us</a></li>
<li><a href="riskassessment.php">Risk assessment</a></li>
</ul>

<div class="nav-right">
<a href="register.php" class="active">Register</a>
<a href="login.php">Login</a>
</div>
</nav>

<div class="register-box">

<h2>Register</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="email" name="email" placeholder="Email" required>
<input type="email" name="confirm_email" placeholder="Confirm Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Register</button>
</form>

<p class="error"><?php echo $message; ?></p>

</div>

<?php include 'footer.php'; ?>

</body>
</html>
