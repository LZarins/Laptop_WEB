<?php
$servername = "fdb29.awardspace.net";
$username = "3624525_zarins";
$password = "p*firmam00";
$dbname = "3624525_zarins";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<br>