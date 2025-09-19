<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "classsync";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, content, created_at FROM discussions ORDER BY created_at DESC";
$result = $conn->query($sql);

$discussions = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $discussions[] = $row;
    }
}

echo json_encode($discussions);
$conn->close();
?>
