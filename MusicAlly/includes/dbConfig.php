<?php

$servername = "localhost";
$username = "sadikh";
$password = "sadik";
$database = "MusicAlly";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
