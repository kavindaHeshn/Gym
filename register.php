<?php

session_start();
require_once "../configuration/config.php"; // Updated to include db.php correctly

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data & sanitize inputs
    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $address = trim($_POST["address"]);
    $jobCategory = trim($_POST["jobCategory"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    $gender = $_POST["gender"];
    $city = $_POST["city"];
    $package = $_POST["package"];
    $gymCoach = $_POST["gymCoach"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        $_SESSION["error"] = "All required fields must be filled!";
        header("Location: ../frontend/signup.php");
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["error"] = "Invalid email format!";
        header("Location: ../frontend/signup.php");
        exit();
    }

    // Validate password match
    if ($password !== $confirmPassword) {
        $_SESSION["error"] = "Passwords do not match!";
        header("Location: ../frontend/signup.php");
        exit();
    }

    // Hash password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $emailCheck = $conn->prepare("SELECT email FROM users WHERE email = ?");
    if (!$emailCheck) {
        $_SESSION["error"] = "Database error: " . $conn->error;
        header("Location: ../frontend/signup.php");
        exit();
    }
    $emailCheck->bind_param("s", $email);
    $emailCheck->execute();
    $emailCheck->store_result();

    if ($emailCheck->num_rows > 0) {
        $_SESSION["error"] = "Email already exists!";
        $emailCheck->close();
        header("Location: ../frontend/signup.php");
        exit();
    }
    $emailCheck->close();

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, address, job_category, email, message, gender, city, package, gym_coach, password) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        $_SESSION["error"] = "Database error: " . $conn->error;
        header("Location: ../frontend/signup.php");
        exit();
    }

    $stmt->bind_param("sssssssssss", $firstName, $lastName, $address, $jobCategory, $email, $message, $gender, $city, $package, $gymCoach, $hashedPassword);

    // Execute query
    if ($stmt->execute()) {
        $_SESSION["success"] = "Registration successful! You can now log in.";
        header("Location: ../frontend/login.php");
    } else {
        $_SESSION["error"] = "Error: " . $stmt->error;
        header("Location: ../frontend/signup.php");
    }

    $stmt->close();
}

$conn->close();
?>
