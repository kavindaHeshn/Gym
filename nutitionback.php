<?php
include '../configuration/config.php'; // Make sure config.php defines $conn

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $customerName = $conn->real_escape_string($_POST['customerName']);
    $day          = $conn->real_escape_string($_POST['day']);
    $breakfast    = $conn->real_escape_string($_POST['breakfast']);
    $lunch        = $conn->real_escape_string($_POST['lunch']);
    $snacks       = $conn->real_escape_string($_POST['snacks']);
    $dinner       = $conn->real_escape_string($_POST['dinner']);
    $protein      = (int) $_POST['protein'];
    $carbs        = (int) $_POST['carbs'];

    // Insert query
    $sql = "INSERT INTO nutrition_plans 
            (customer_name, day, breakfast, lunch, snacks, dinner, protein, carbs)
            VALUES 
            ('$customerName', '$day', '$breakfast', '$lunch', '$snacks', '$dinner', $protein, $carbs)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Nutrition plan added successfully!'); window.location.href = '../staff_dashboard/1.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
