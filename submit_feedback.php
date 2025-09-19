<?php
session_start();
include '../configuration/config.php';

// Retrieve form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Simple validation
if (!empty($name) && !empty($email) && !empty($message)) {
    try {
        // Insert data into the database
        $sql = "INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
      
        $stmt->bind_param("sss", $name, $email, $message);  // Correct parameter binding

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect or confirmation
            echo "<script>alert('Thank you for your feedback!'); window.location.href='feedback_form.html';</script>";
        } else {
            echo "<script>alert('Error submitting feedback.'); window.history.back();</script>";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Database error: " . $e->getMessage();
    }
} else {
    echo "<script>alert('Please fill in all fields.'); window.history.back();</script>";
}
?>
