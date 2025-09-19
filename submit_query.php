<?php
// Include database configuration
include '../configuration/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $customer_name = $_POST['customer_name'];
    $question = $_POST['question'];

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO customer_queries (customer_name, question) VALUES (?, ?)");
    $stmt->bind_param("ss", $customer_name, $question);
    $stmt->execute();
    $stmt->close();

    // Redirect to the same page after submission (or a success page)
    echo "<script>alert('Class added successfully!'); window.location.href='manage_classes.php';</script>";
}
?>
