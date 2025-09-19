<?php
session_start();
include '../configuration/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_class"])) {
    $name = $_POST['name'];
    $schedule = $_POST['schedule'];

    $stmt = $conn->prepare("INSERT INTO classes (name, schedule) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $schedule);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Class added successfully!'); window.location.href='manage_classes.php';</script>";
}

if (isset($_GET['delete'])) {
    $class_id = $_GET['delete'];
    $conn->query("DELETE FROM classes WHERE id = $class_id");
    echo "<script>alert('Class deleted successfully!'); window.location.href='manage_classes.php';</script>";
}

$classes = $conn->query("SELECT * FROM classes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Classes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e6e6e6;
            font-family: Arial, sans-serif;
            padding-top: 90px; /* space for navbar */
        }

        .navbar-custom {
            background-color:rgb(35, 86, 141);
            height: 120px;
        }

        .navbar-custom .navbar-brand {
            font-size: 40px;
            font-weight: bold;
        }

        .container {
            margin-top: 30px;
            margin-bottom: 50px;
        }

        .content-wrapper {
            max-width: 900px;
            margin: 40px auto 0 auto;
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-center {
            display: block;
            margin: 20px auto;
        }

        .action-links a {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid px-4">
        <span class="navbar-brand">Manage Classes</span>
        <div class="d-flex ms-auto">
            <a href="../admin_panel/admin_dashboard.php" class="btn btn-outline-light btn-sm me-2">Back to Dashboard</a>
            <a href="../authentication/logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="content-wrapper">
        <h2>Fitness Class Management</h2>

        <!-- Add New Class Form -->
        <h3>Add New Class</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Class Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="schedule">Class Schedule:</label>
                <input type="text" id="schedule" name="schedule" class="form-control" required>
            </div>
            <button type="submit" name="add_class" class="btn btn-success btn-center">Add Class</button>
        </form>

        <!-- Class List Table -->
        <h3>Existing Classes</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Class Name</th>
                    <th>Schedule</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($class = $classes->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($class["name"]) ?></td>
                        <td><?= htmlspecialchars($class["schedule"]) ?></td>
                        <td class="action-links">
                            <a href="?delete=<?= $class["id"] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this class?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
