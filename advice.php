<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group - Advice</title>

    <link rel="stylesheet" href="navbar.css">
    
</head>

<body class="
<?php if(!empty($_SESSION['largeText'])) echo 'large-text '; ?>
<?php if(!empty($_SESSION['highContrast'])) echo 'high-contrast '; ?>
<?php if(!empty($_SESSION['dyslexiaFont'])) echo 'dyslexia-font '; ?>
">

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-left">
        <img src="logo.jpg" alt="Logo" class="logo">
    </div>

    <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="advice.php" class="active">Advice</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="riskassessment.php">Risk assessment</a></li>
    </ul>

    <div class="nav-right">
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>
</nav>

<!-- ACCESSIBILITY BUTTON -->
<a href="accessibility.php" class="accessibility-logo">
    <img src="accessibility.jpg" alt="Accessibility">
</a>

<!-- ARTICLES SECTION -->
<div class="articles-container">

    <div class="articles-header">
        <h1>Health advice articles</h1>

        <div class="search-box">
            <button class="filter-btn">🔽</button>
            <input type="text" id="searchInput" placeholder="Search articles">
        </div>
    </div>

    <!-- GRID (JS FILLS THIS) -->
    <div class="articles-grid" id="articlesGrid"></div>

    <!-- PAGINATION -->
    <div class="pagination">
        <button onclick="changePage(-1)">⬅</button>
        <span id="pageNumbers"></span>
        <button onclick="changePage(1)">➡</button>
    </div>

</div>

<?php include 'footer.php'; ?>

<script src="articles.js"></script>
</body>
</html>