<?php
require_once "dataB.php";

// Get the current date and time
$currentDate = date('Y-m-d H:i:s');

// Write a SQL query to remove laptops that are expired or have been inactive for too long
$sql = "DELETE FROM wish_list WHERE Laptop_ID IN (
            SELECT Laptop_ID FROM Laptop WHERE ExpirationDate < '$currentDate' OR LastViewed < DATE_SUB(NOW(), INTERVAL 6 MONTH)
        )";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Expired or inactive laptops have been removed from the wish list.";
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
