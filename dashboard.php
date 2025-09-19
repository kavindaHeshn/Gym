<?php
session_start();
include '../configuration/config.php';

// Check if user is logged in and is an admin
if (!isset($_SESSION["user_id"]) || $_SESSION["role"] != "admin") {
    header("Location: ../authentication/login.php");
    exit();
}

// Fetch total number of users from the database
$result = $conn->query("SELECT COUNT(*) AS total_users FROM users");
$row = $result->fetch_assoc();
$total_users = $row['total_users'];
?>