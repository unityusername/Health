

<?php
session_start();
require 'db.php';

$message = "";

// ✅ If already logged in
if(isset($_SESSION['user_id'])){
    $message = "You are already logged in.";
}

// ✅ Only process login if NOT already logged in
if($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['user_id'])){

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        $message = "Please fill in all fields.";
    }
    else {

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([':email'=>$email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password,$user['password'])){

            session_regenerate_id(true); // 🔒 security bonus

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: home.php");
            exit();
        } 
        else {
            $message = "Invalid email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - Health Advice Group</title>
<link rel="stylesheet" href="navbar.css">

<style>
.login-box{
width:350px;
margin:80px auto;
padding:30px;
background:white;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
}
.login-box input{
width:90%;
padding:10px;
margin:10px 0;
}
.login-box button{
padding:10px 20px;
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
<a href="register.php">Register</a>
<a href="login.php" class="active">Login</a>
</div>
</nav>
<a href="accessibility.php" class="accessibility-logo">
    <img src="accessibility.jpg" alt="Accessibility" />
</a>

<div class="login-box">
<h2>Login</h2>

<form method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>

<p class="error"><?php echo $message; ?></p>

</div>

<?php include 'footer.php'; ?>

</body>
</html>
