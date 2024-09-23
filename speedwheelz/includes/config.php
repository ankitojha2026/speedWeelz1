


<?php
$servername = "localhost";  // Use your server name or IP address
$username = "root";         // MySQL username (default is 'root' for local servers)
$password = "";             // MySQL password (leave empty for default local setup)
$dbname = "speed";          // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>




