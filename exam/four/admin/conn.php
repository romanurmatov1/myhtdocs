<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, description FROM exam";
$result = $conn->query($sql);

?>