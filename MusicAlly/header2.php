<?php
session_start();
include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MusicAlly</title>
  <link rel="stylesheet" href="css/styles2.css">
  <script src="https://kit.fontawesome.com/a71247737b.js" crossorigin="anonymous"></script>
  <script src="js\app.js"></script>
  <script src="js\app2.js"></script>

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <a href="home.php" class="navbar__logo">MusicAlly</a>
    <div class="navbar__toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    <div class="navbar__menu">
      <a href="home.php" class="navbar__link">Home</a>
      <a href="event.php" class="navbar__link">Event</a>
      <?php
      if (isset($_SESSION["useruid"])) {
        echo '<a href="profile.php" class="navbar__link">Profile</a>';
        echo '<a href="logout.php" class="navbar__link">Logout</a>';
      } else {
        echo '<a href="login.php" class="navbar__link">Musician Login</a>';
      }
      ?>

  </nav>

  </div>
  </nav>
