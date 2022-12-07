<?php
session_start();
$con = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");

if (isset($_POST['save_info'])) {
  $musician_Name = $_POST['musician_Name'];
  $location_Name = $_POST['location_Name'];
  $event_Name = $_POST['event_Name'];
  $event_Address = $_POST['event_Address'];
  $event_Date = $_POST['event_Date'];
  $event_Time = $_POST['event_Time'];
  $usersId = $_SESSION["userid"];


  $query = "INSERT INTO events (musician_Name,location_Name,event_Name,event_Address,event_Date,event_Time,user_Id)
    VALUES ('$musician_Name','$location_Name', '$event_Name','$event_Address','$event_Date','$event_Time', '$usersId')";
  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    $_SESSION['status'] = "You Successfully Entered Your Event";
    header("Location: eventsignup.php");
  } else {
    $_SESSION['status'] = "Successfully NOT entered event";
    header("Location:eventsignup.php");
  }
}
