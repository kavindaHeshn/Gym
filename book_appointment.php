<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "sri_lanka1";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$customer_id = $_POST['customer_id'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];

// Prevent booking in the past
$today = date("Y-m-d");
if ($appointment_date < $today) {
    echo "<p style='color: red; font-family: Arial, sans-serif; text-align: center; margin-top: 20px;'>⚠️ You cannot book an appointment in the past!</p>";
    exit;
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO appointments (customer_id, appointment_date, appointment_time) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $customer_id, $appointment_date, $appointment_time);

// Execute and provide feedback
if ($stmt->execute()) {
    echo "<div style='
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #e6ffed;
        border: 1px solid #b2f2bb;
        border-radius: 10px;
        font-family: Arial, sans-serif;
        text-align: center;
    '>
        <h2 style='color: green;'>✅ Appointment booked successfully!</h2>
        <p><strong>Customer ID:</strong> {$customer_id}</p>
        <p><strong>Date:</strong> {$appointment_date}</p>
        <p><strong>Time:</strong> {$appointment_time}</p>
        <a href='book_appointment.html' style='
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        '>🔙 Back to Booking</a>
    </div>";
} else {
    echo "<p style='color: red; text-align: center;'>❌ Error: " . $stmt->error . "</p>";
}

// Close connection
$stmt->close();
$conn->close();
?>
