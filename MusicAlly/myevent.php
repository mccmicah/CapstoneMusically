<?php
include_once 'header.php';

?>

<?php
if (isset($_SESSION["useruid"])) {
  echo '';
} else {
  header('Location: event.php');
}
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
</head>
<?php
$con = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");
$id = $_GET['id'];
$sql = "SELECT * FROM events where event_ID=" . $id . ";";
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
        <div class="d-flex">
          <div style="margin-right: 12rem;">
            <?php echo "<a href='editevent.php?event_ID=" . $rows['event_ID'] . "'>  <button class='btn7'  style=''>
        <span>
      Edit Event
        </span>
      </button>
      </a>" ?>
          </div>
          <div>
            <?php echo "<a href='deleteevent.php?event_ID=" . $rows['event_ID'] . "'>  <button class='btn7'  style=''>
        <span>
      Delete Event
        </span>
      </button>
      </a>" ?>
          </div>
        </div>
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

    <!-- <div style="float:right;">
 <div class="container">
   <h2><center>Song queue</center></h2>
   <table class="table">  -->

  <?php } ?>

  <div "table-responsive">
    <div class="container">
      <h2>
        <center>Song queue</center>
      </h2>
      <table class="table table-striped table-hover mx-auto w-auto">
        <thead>
          <tr>
            <th scope="col">Artist Name</th>
            <th scope="col">Song Name</th>
            <th scope="col">Tip Amount</th>
            <th scope="col">Lyrics</th>
            <!--   <th scope="col">Accept</th>-->
            <th scope="col">Remove</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $con = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");
          if ($con->connect_error) {
            die("Connection Failed: " . $con->connect_error);
          }
          ?>
          <?php
          $sql = "SELECT * from `songqueue` inner join `songs` on `songqueue`.`song_ID` = `songs`.`song_ID`  ORDER BY tip DESC";
          $result = mysqli_query($con, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $songId = $row['id'];
              $artist = $row['artist'];
              $song = $row['song'];
              $tip = $row['tip'];
              $lyrics = $row['lyrics_Link'];
              /* <td>
             <a class='btn6' style='top: 0px;color:white;background-color: #24a0ed ;' href='acceptsong.php?eventId=$id&id=$songId'>Accept</a>
           </td> */
              echo "<tr>
            <td>$artist</td>
            <td>$song</td>
            <td>$$tip</td>
            <td><a class='btn6' style='top: 0px;color:white;background-color: #4CAF50;' href='$lyrics' target='blank'$lyrics>View lyric</a></td>


            <td>
              <a class='btn6' style='top: 0px;color:white;background-color: #f00e0e;' href='removesong.php?eventId=$id&id=$songId'>Remove</a>
            </td>
          </tr>

          ";
            }
          }

          ?>
        </tbody>

      </table>

    </div>
  </div>


  <?php
  $con = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");
  if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
  }
  ?>
  <?php
  $con = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");
  $sql = "SELECT * FROM events";
  $result = $con->query($sql);
  $row = [];
  if ($result->num_rows > 0) {
    $row = $result->fetch_all(MYSQLI_ASSOC);
  }

  ?>

</body>

</html>
