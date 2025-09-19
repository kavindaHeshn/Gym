<?php
session_start();
include '../configuration/config.php';

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$plan = $_POST['plan'];
$trainer = $_POST['trainer'];
$notes = $_POST['notes'];
$paymentMethod = $_POST['paymentMethod'];
$bankName = isset($_POST['bankName']) ? $_POST['bankName'] : null;
$accountNumber = isset($_POST['accountNumber']) ? $_POST['accountNumber'] : null;
$accountHolderName = isset($_POST['fullname']) ? $_POST['fullname'] : null;  // Fixed this line to match 'fullname'
$otpCode = isset($_POST['otpCode']) ? $_POST['otpCode'] : null;

// Prepare and bind the SQL query
$sql = "INSERT INTO membership (fullname, email, plan, trainer, notes, payment_method, bank_name, account_number, account_holder_name, otp_code) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $fullname, $email, $plan, $trainer, $notes, $paymentMethod, $bankName, $accountNumber, $accountHolderName, $otpCode);

// Execute the query
if ($stmt->execute()) {
    echo "Membership submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
