<?php
session_start();
$con = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");

if (isset($_POST['payment'])) {
  $artist = $_POST['artist'];
  $song = $_POST['song'];
  $tip = $_POST['tip'];
  $eventId = $_POST['eventId'];
  $songId = $_POST['songId'];

  $query = "INSERT INTO songqueue (artist,song,tip,event_ID, song_ID)
    VALUES ('$artist','$song', '$tip', '$eventId', '$songId')";
  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    $_SESSION['status'] = "You Successfully Entered Your Event";
    header("Location: myevent.php?id=$eventId");
  } else {
    $_SESSION['status'] = "Successfully NOT entered event";
    header("Location: myevent.php?id=$eventId");
  }
}


if (isset($_POST['payment'])) {
  $name = $_POST['name'];
  $cardnumber = $_POST['cardnumber'];
  $expirationdate = $_POST['expirationdate'];
  $securitycode = $_POST['securitycode'];
  $tip = $_POST['tip'];


  $query = "INSERT INTO payment_info (name,cardnumber,expirationdate,securitycode,tip)
    VALUES ('$name','$cardnumber', '$expirationdate','$securitycode','$tip')";
  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    $_SESSION['status'] = "You Successfully Entered Your Event";
    header("Location: myevent.php?id=$eventId");
  } else {
    $_SESSION['status'] = "Successfully NOT entered event";
    header("Location: myevent.php?id=$eventId");
  }
}
