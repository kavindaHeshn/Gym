<?php
// Include database configuration
include '../configuration/config.php';

// Fetch all customer queries
$query = "SELECT * FROM customer_queries";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Query</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('../images/7059.webp'); /* Replace with your image path */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.9); /* Slight transparency */
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.8); /* Dark transparent navbar */
    }

    .navbar a {
      color: white !important;
    }

    .table-container {
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FitZone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5">
    <!-- Add New Query Form -->
    <div class="card p-4 shadow">
      <h2 class="mb-4">Submit Your Question</h2>
      <form action="submit_query.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Your Name</label>
          <input type="text" class="form-control" name="customer_name" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Question</label>
          <textarea class="form-control" name="question" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Question</button>
      </form>
    </div>

    <!-- Display Customer Queries -->
    <div class="table-container">
      <h3 class="text-center mb-4">Customer Queries</h3>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Submitted At</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Check if there are any queries
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>" . $row['id'] . "</td>
                      <td>" . htmlspecialchars($row['customer_name']) . "</td>
                      <td>" . htmlspecialchars($row['question']) . "</td>
                      <td>" . ($row['answer'] ? htmlspecialchars($row['answer']) : 'Not answered yet') . "</td>
                      <td>" . $row['created_at'] . "</td>
                    </tr>";
            }
          } else {
            echo "<tr><td colspan='5' class='text-center'>No records found</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
