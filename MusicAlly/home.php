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
  <link rel="stylesheet" href="css/styles.css">

  <script src="https://kit.fontawesome.com/a71247737b.js" crossorigin="anonymous"></script>

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
    </div>
  </nav>
  <!-- homepage body text -->

  <div class="homepagebodys">
    <div class="homepagebodys__container">
      <div>
        <h1 class="topline">Be the best part of the show!</h1> <br>
        <p class="homepagebodys_heading">With MusicAlly, you can become a part of the show by requesting your favorite
          songs to be played by the artist!</p><br>
        <div class="homepagebodys__features">
          <p class="homepagebodys__feature"><i class="fas fa-check-circle"></i> Request songs
          </p>
          <p class="homepagebodys__feature"><i class="fas fa-check-circle"></i> Add a tip to jump the queue
          </p>
          <p class="homepagebodys__feature"><i class="fas fa-check-circle"></i> Securely add payment methods
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Search Event Homepage box -->
  <div id="test">
    <div class="container__search show">
      <div class="wrapper">
        <input type="text" name="search" id="search" placeholder="Search event..." autocomplete="chrome-off">
        <button><i class="fa fa-search"></i></button>
        <div class="results">
          <p><b> Recent </b></p>
          <ul>
            <li> Halloweekend Rocks! </li>
            <li> Japanese Breakfast </li>
            <li> Country Time Fun </li>
            <li> End of Summer Bash </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer" style="text-align:center">
    <a href="about.php#aboutus" class="footer__link" style="padding:12px"><i class="fas fa-book"></i> ABOUT</a>
    <a href="about.php#meetus" class="footer__link" style="padding:12px"><i class="fas fa-table"></i> OUR TEAM</a>
    <a href="about.php#contactus" class="footer__link" style="padding:12px"><i class="fas fa-user"></i> CONTACT</a>
    <br><br>
    <a href="#" class="footer__link"><i class="fa fa-arrow-up"></i> To the top</a>
  </footer>


  <!-- js -->
  <script src="js\app.js"></script>

</body>

</html>
