<?php
// Database connection details
$servername = "localhost";
$username = "root";  // Use your own MySQL username
$password = "";      // Use your own MySQL password
$dbname = "job_portal";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
