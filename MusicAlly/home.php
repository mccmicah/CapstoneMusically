<?php
include_once 'header.php';
?>


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

<?php
include_once 'footer.php';
?>