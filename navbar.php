<?php
session_start(); // Start the session here, before any HTML or output.
?>
<nav class="navbar">
    <link rel="stylesheet" href="css/navbar.css">
    <h1>Ograda Cafè</h1>
    <div class="logo">
        <a href="index.php">
            <img src="images/logo.png" alt="logo" class="logo" width="200">
        </a>
    </div>
    <div class="search-container">
        <input type="text" id="search-input" placeholder="Caută..." onkeyup="filterResults()">
        <div id="search-results"></div> 
    </div>
    <ul class="nav-links">
        <li><a href="gustari.php">Gustări</a></li>
        <li><a href="patiserie.php">Patiserie</a></li>
        <li><a href="meniu-vegetarian.php">Meniu Vegetarian</a></li>
        <li><a href="cafele.php">Cafele</a></li>
        <li><a href="bauturi-de-sezon.php">Băuturi de Sezon</a></li>
        <?php
        if (isset($_SESSION["username"])) {
            echo '<li><a href="logout.php">Exit</a></li>';
        } else {
            echo '<li><a href="login.php">Login</a></li>';
        }
        ?>
    </ul>
</nav>
