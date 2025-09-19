<?php
$conn = new mysqli("localhost", "root", "", "sri_lanka1");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch query data from the database
    $sql = "SELECT * FROM customer_queries WHERE id = $id";
    $result = $conn->query($sql);
    $query_data = $result->fetch_assoc();
} else {
    echo "Query ID not provided!";
    exit;
}

// Update the query data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $stmt = $conn->prepare("UPDATE customer_queries SET customer_name = ?, question = ?, answer = ? WHERE id = ?");
    $stmt->bind_param("sssi", $customer_name, $question, $answer, $id);
    $stmt->execute();
    $stmt->close();

    // Redirect back to view queries page after successful update
    echo "<script>alert('Query updated successfully!'); window.location.href='view_queries.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Query</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding-top: 90px;
    }

    .navbar-custom {
      background-color: rgb(55, 115, 179);
      height: 100px;
      display: flex;
      align-items: center;
    }

    .navbar-custom .navbar-brand {
      font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid px-4">
      <span class="navbar-brand">Edit Customer Query</span>
      <div class="d-flex ms-auto">
        <a href="view_queries.php" class="btn btn-outline-light btn-sm">Back to Queries</a>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h2 class="mb-4">Edit Query</h2>

    <form action="" method="POST">
      <div class="mb-3">
        <label class="form-label">Customer Name</label>
        <input type="text" class="form-control" name="customer_name" value="<?= htmlspecialchars($query_data['customer_name']) ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Question</label>
        <textarea class="form-control" name="question" rows="4" required><?= htmlspecialchars($query_data['question']) ?></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Answer</label>
        <textarea class="form-control" name="answer" rows="4"><?= htmlspecialchars($query_data['answer']) ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Update Query</button>
    </form>
  </div>

</body>
</html>

<?php
$conn->close();
?>
