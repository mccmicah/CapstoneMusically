<?php
include_once 'header.php';
?>
<section style="">

  <div class="eventsearchcontainer" style="">
    <b>Event Search</b>
    <form>
      <i class="fas fa-search"></i>
      <input type="text" name="" id="search-item" placeholder="Search event">
    </form>
  </div>
</section>
<?php
$con = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");
$sql = "SELECT * FROM events";
$result = $con->query($sql);
$row = [];
if ($result->num_rows > 0) {
  $row = $result->fetch_all(MYSQLI_ASSOC);
}

?>

<?php
if (!empty($row))
  foreach ($row as $rows) {
?>
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
    <?php echo "<a href='eventinfo.php?id=" . $rows['event_ID'] . "'>  <button class='btn7'>
      <span>
Select Event
      </span>
    </button>
    </a>" ?>
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
<?php } ?>
<?php
if (isset($_SESSION["useruid"])) {
  echo '<a href="eventsignup.php" id="newEvent" style="position:absolute; right: 100px; top:100px;">
        <button id="createEvent" class="btnabout" style="color:white;width:250px;height:50px;font-size:20px">Create New Event</button>
      </a>';
} else {
}

?>

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

</div>
</body>

</html>
