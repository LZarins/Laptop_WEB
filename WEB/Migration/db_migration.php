<?php
// Database connection
$servername = "fdb29.awardspace.net";
$username = "3624525_zarins";
$password = "****";
$dbname = "3624525_zarins";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection status
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL queries for creating tables
$sql = "
CREATE TABLE IF NOT EXISTS Laptop (
    Laptop_ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    Nosaukums VARCHAR(255) NOT NULL,
    Info TEXT NOT NULL,
    Bilde VARCHAR(255),
    Bilde1 VARCHAR(255),
    Bilde2 VARCHAR(255),
    Procesors VARCHAR(255),
    RAM VARCHAR(255),
    Videokarte VARCHAR(255),
    Kur_atrast VARCHAR(255),
    Kur_atrast_A VARCHAR(255),
    Ekrana_izmers VARCHAR(50),
    Ekrana_izskirtspeja VARCHAR(50),
    Procesora_kodoli INT(11),
    Video_kartes_atmina VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS wish_list (
    WishList_ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    Laptop_ID INT(11) NOT NULL,
    FOREIGN KEY (Laptop_ID) REFERENCES Laptop(Laptop_ID) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS logs (
    Log_ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    Timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Event_Level VARCHAR(50),
    Event_Message TEXT
);
";

// Execute SQL query to create tables
if ($conn->multi_query($sql) === TRUE) {
    echo "Database structure successfully created!";
} else {
    echo "Error creating database structure: " . $conn->error;
}

// Close connection
$conn->close();
?>
