<?php
// Database connection (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sri_lanka1"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the query id from URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM customer_queries WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}

// Handle the form submission to update data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = $_POST['customer_name'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $update_sql = "UPDATE customer_queries SET customer_name='$customer_name', question='$question', answer='$answer' WHERE id=$id";
    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Record updated successfully!'); window.location.href='view_queries.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer Query</title>
</head>
<body>
    <h1>Edit Customer Query</h1>

    <form method="POST">
        <label for="customer_name">Customer Name:</label><br>
        <input type="text" name="customer_name" value="<?php echo $row['customer_name']; ?>" required><br><br>

        <label for="question">Question:</label><br>
        <textarea name="question" required><?php echo $row['question']; ?></textarea><br><br>

        <label for="answer">Answer:</label><br>
        <textarea name="answer"><?php echo $row['answer']; ?></textarea><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
