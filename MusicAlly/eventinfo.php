<?php
include_once 'header.php';

?>

<head>
  <script>
    function my_fun(str) {

      if (window.XMLHttpRequest) {

        xmlhttp = new XMLHttpRequest();

      } else {

        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

      }

      xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

          document.getElementById('poll').innerHTML = this.responseText;

        }

      }

      xmlhttp.open("GET", "songdata.php?value=" + str, true);

      xmlhttp.send();

    }
  </script>
</head>
<?php
$con = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");
$eventId = $_GET['id'];
$sql = "SELECT * FROM events where event_ID=" . $eventId . ";";
$result = $con->query($sql);
$row = [];
if ($result->num_rows > 0) {
  $row = $result->fetch_all(MYSQLI_ASSOC);
}

?>

<body>
  <?php
  if (!empty($row))
    foreach ($row as $rows) {
  ?>
    <div class="aParent" style="float:left;margin-top:2rem;">
      <div class="eventcontainer" id="event3" style="visibility:visible">
        <div class="btns" style="left: 340px; top:280px;">
          <Button onclick="Toggle1()" id="btnh1" class="btn"><i class="fas fa-heart"></i></Button>
        </div>
        <div class="text1">
          Hosted By:
        </div>
        <div class="text2">
          <b><?php echo $rows['musician_Name']; ?></b>
        </div>
        <div class="text3">
          <?php echo $rows['location_Name']; ?><br>
        </div>
        <div>
          <img class="img" src="img/img_avatar.png" alt="Avatar" style="width:50px">
        </div>
        <?php
        if (isset($_SESSION["useruid"])) {
          echo "<a href='myevent.php?id=" . $rows['event_ID'] . "'>  <button class='btn7'>
    <span>
  View Event
    </span>
  </button>
  </a>";
        } else {
        }

        ?>

      </div>
      <div class="eventcontainer2" id="event4" style="visibility:visible">
        <div class="text4">
          <br><b><?php echo $rows['event_Name']; ?></b>
        </div>
        <div class="text5">
          <?php echo $rows['event_Address']; ?>
          <br> <?php echo $rows['event_Date']; ?>
          <br> <?php echo $rows['event_Time']; ?><br>
        </div>
      </div>
    </div>
  <?php } ?>

  <script>
    var btnvar1 = document.getElementById('btnh1');

    function Toggle1() {
      if (btnvar1.style.color == "red") {
        btnvar1.style.color = "grey"
      } else {
        btnvar1.style.color = "red"
      }
    }
  </script>


  <form class="form-container" action="songqueueinsert.php" method="post" style="float:right;">
    <div style="margin: 10px;">
      <label>Artist:</label>
      <?php
      $sqlArtists = "SELECT * FROM artists";

      $resultArtists = mysqli_query($con, $sqlArtists);
      if (mysqli_num_rows($resultArtists) > 0) {
        echo "<select name='artist' class='SelectA' onchange='my_fun(this.value);'>";
        while ($rowsArtists = mysqli_fetch_assoc($resultArtists)) {
          echo "<option value='" . $rowsArtists["artists_name"] . "'>" . $rowsArtists["artists_name"] . "</option>";
        }
        echo "</select>";
      } else {
        echo "<select >
      			<option>Select an Artist</option>
      		</select>";
      }
      ?>

      <br><br>
      <label>Song:</label>
      <div name="song" id="poll">

      </div>
    </div>
    <section>
      <p><b>Send a tip</b> (optional)</p>
      <p>Sending a tip increases the ranking of your song and the chances of it getting picked by the artist!</p>
    </section>
    <div class="field-tip" style="">
      <label for="tip"></label>
      <input name="tip" type="text" maxlength="2" pattern="[0-9]*" inputmode="numeric" placeholder="Tip amount" />
    </div>

    <div class="field-container">
      <label for="name">Name</label>
      <input name="name" id="name" maxlength="20" type="text" />

    </div>
    <div class="field-container">
      <label for="cardnumber">Card Number</label>
      <input name="cardnumber" id="cardnumber" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" />

    </div>
    <div class="field-container">
      <label for="expirationdate">Expiration (mm/yy)</label>
      <input name="expirationdate" type="text" maxlength="5" pattern="([0-9]{2}[/]?){2}" />
    </div>
    <div class="field-container">
      <label for="securitycode">Security Code</label>
      <input name="securitycode" id="securitycode" type="text" maxlength="4" inputmode="numeric" />
    </div>
    <div class="field-container" style="position: relative; color: white;">
      <button type="submit" name="payment" class="payment">Submit</button>
    </div>
    <?php echo "<input name='eventId' value=" . $eventId . " type='hidden' />" ?>
  </form>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js'></script>

  <script type="text/javascript">
    $('#cardnumber').unmask("9999 9999 9999 9999");
  </script>


  <script src="js/script.js"></script>

</body>

</html>
