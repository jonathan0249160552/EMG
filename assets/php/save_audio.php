<?php
// Database connection details
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ems_db';

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Get the audio data from the request
$audioData = file_get_contents('php://input');

// Prepare and execute the SQL query
$sql = "INSERT INTO audio_table (audio_data) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("b", $audioData);
$stmt->execute();

// Close the statement and connection
$stmt->close();
$conn->close();
?>
