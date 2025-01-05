<?php
// Define the database server's hostname or IP address
$servername = "fdb29.awardspace.net";
// Define the username for database access
$username = "3624525_zarins";
// Define the password for the specified database user
$password = "****";
// Define the name of the database to connect to
$dbname = "3624525_zarins";

// Create a new connection to the database using the MySQLi object
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<br>
