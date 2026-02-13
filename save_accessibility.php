<?php
session_start();

$_SESSION['largeText'] = isset($_POST['largeText']);
$_SESSION['highContrast'] = isset($_POST['highContrast']);
$_SESSION['dyslexiaFont'] = isset($_POST['dyslexiaFont']);

header("Location: accessibility.php");
exit();
?>
