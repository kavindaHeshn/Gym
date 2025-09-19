<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sri_lanka1";

// DB connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query to get schedule
$sql = "SELECT day, description FROM gym_schedule ORDER BY FIELD(day, 'Monday','Tuesday','Wednesday','Thursday','Friday')";
$result = $conn->query($sql);

$schedule = [];

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $schedule[] = $row;
  }
}

$conn->close();

// Return as JSON
header('Content-Type: application/json');
echo json_encode($schedule);
?>
