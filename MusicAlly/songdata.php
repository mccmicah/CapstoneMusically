<?php
$conn = mysqli_connect("localhost", "sadikh", "sadik", "MusicAlly");

if (!$conn) {

  exit("Connection failed: ");
} else {
}

$val = $_GET["value"];

$val_M = mysqli_real_escape_string($conn, $val);

$sql = "SELECT * FROM songs WHERE artist_Name='$val_M'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  echo "<select name='song'>";

  while ($rows = mysqli_fetch_assoc($result)) {

    echo "<option value='" . $rows["song_Name"] . "'>" . $rows["song_Name"] . "</option>";
    echo "<input name='songId' value=" . $rows['song_ID'] . " type='hidden' />";
  }

  echo "</select>";
} else {

  echo "<select >

			<option>Select Song</option>

		</select>";
}
