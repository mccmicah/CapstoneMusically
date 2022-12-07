<?php
include 'includes/dbConfig.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $eventId = $_GET['eventId'];

  $sql = "delete from `songqueue` where id=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    $_SESSION['status'] = "You Successfully Removed Your Song";
    header("Location: myevent.php?id=$eventId");
  } else {
    die("Connection failed: " . $con->connect_error);
  }
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

      </div>
    </div>
  </div>
</body>
