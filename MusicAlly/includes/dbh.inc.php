<?php

$servername = "localhost";
$dBUsername = "sadikh";
$dBPassword = "sadik";
$dBName = "MusicAlly";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
