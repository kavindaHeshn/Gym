<?php
$conn = new mysqli("localhost", "root", "", "sri_lanka1");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer_queries ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Queries</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      padding-top: 90px; /* Space for navbar */
    }

    .navbar-custom {
      background-color:rgb(55, 115, 179);
      height: 100px;
      display: flex;
      align-items: center;
    }

    .navbar-custom .navbar-brand {
      font-size: 24px;
      font-weight: bold;
    }

    .btn-outline-light {
      padding: 8px 16px;
      font-size: 14px;
    }
  </style>
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid px-4">
      <span class="navbar-brand">Customer Queries</span>
      <div class="d-flex ms-auto">
        <a href="1.php" class="btn btn-outline-light btn-sm">Back to Dashboard</a>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container mt-4">
    <h2 class="mb-4">Customer Questions</h2>
    <table class="table table-bordered table-striped">
      <thead class="table-primary">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Question</th>
          <th>Answer</th>
          <th>Submitted At</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['customer_name']) ?></td>
            <td><?= htmlspecialchars($row['question']) ?></td>
            <td><?= $row['answer'] ? htmlspecialchars($row['answer']) : '<span class="text-danger">Not answered</span>' ?></td>
            <td><?= $row['created_at'] ?></td>
            <td>
              <a href="edit_query.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

</body>
</html>

<?php
$conn->close();
?>
