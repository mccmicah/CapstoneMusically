<?php
include_once 'header2.php';
?>
<?php
if (isset($_SESSION["useruid"])) {
  echo '';
} else {
  header('Location: home.php');
}
?>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
$con = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");
$id = $_GET['event_ID'];
$sqlGET = "SELECT * FROM events where event_ID=" . $id . ";";
$resultGET = $con->query($sqlGET);
$row = mysqli_fetch_assoc($resultGET);

if (isset($_POST['save_info'])) {
  $musician_Name = $_POST['musician_Name'];
  $location_Name = $_POST['location_Name'];
  $event_Name = $_POST['event_Name'];
  $event_Address = $_POST['event_Address'];
  $event_Date = $_POST['event_Date'];
  $event_Time = $_POST['event_Time'];


  $sql = "UPDATE `events` set event_ID=$id,musician_Name='$musician_Name',location_Name='$location_Name',event_Name='$event_Name',event_Address='$event_Address',event_Date='$event_Date',event_Time='$event_Time' where event_ID=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    //echo "Updated successful";
    $_SESSION['status'] = "You Successfully Updated Your Event";
    //header("Location: eventsignup.php");
    header("Location: myevent.php?id=$id");
  } else {
    die(mysqli_error($con));
  }
} else {
}

?>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <?php
        if (isset($_SESSION['status'])) {
        ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>YAY!</strong> <?php echo $_SESSION['status']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php
          unset($_SESSION['status']);
        }
        ?>

        <div class="card mt-5">
          <div class="card-header">
            <center>
              <h4>Event Sign Up</h4>
            </center>
          </div>
          <div class="card-body">

            <form action="" method="POST">
              <div class="form-group mb-3">
                <label for="">Musician Name</label>
                <input type="text" name="musician_Name" value="<?php echo $row['musician_Name']; ?>" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Location</label>
                <input type="text" name="location_Name" value="<?php echo $row['location_Name']; ?>" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Event Name</label>
                <input type="text" name="event_Name" value="<?php echo $row['event_Name']; ?>" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Address</label>
                <input type="text" name="event_Address" value="<?php echo $row['event_Address']; ?>" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Date</label>
                <input type="date" name="event_Date" value="<?php echo $row['event_Date']; ?>" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Time</label>
                <input type="time" name="event_Time" value="<?php echo $row['event_Time']; ?>" class="form-control"><br><br>
                <div class="form-group mb-3" style="position: relative;"><br><br><br><br>
                  <button type="submit" name="save_info" class="btn btn-primary">Update</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <?php
  include_once 'footer.php';
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
