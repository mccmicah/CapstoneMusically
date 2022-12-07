<?php
include 'includes/dbConfig.php';
if(isset($_GET['event_ID'])) {
  $id=$_GET['event_ID'];

  $sql="delete from `events` where event_ID=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    $_SESSION['status'] = "Deleted successful";
    header("Location: event.php");
  }else {
    die("Connection failed: " . $con->connect_error);
  }
}
