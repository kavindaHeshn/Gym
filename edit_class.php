<?php
session_start();
include '../configuration/config.php';

// Add New Class
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_class"])) {
    $name = $_POST['name'];
    $schedule = $_POST['schedule'];

    $stmt = $conn->prepare("INSERT INTO classes (name, schedule) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $schedule);
    $stmt->execute();
    $stmt->close();
    header("Location: manage_classes.php");
    exit();
}

// Delete Class
if (isset($_GET['delete'])) {
    $class_id = $_GET['delete'];
    $conn->query("DELETE FROM classes WHERE id = $class_id");
    header("Location: manage_classes.php");
    exit();
}

// Edit Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_class"])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $schedule = $_POST['schedule'];

    $stmt = $conn->prepare("UPDATE classes SET name = ?, schedule = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $schedule, $id);
    $stmt->execute();
    $stmt->close();
    header("Location: manage_classes.php");
    exit();
}

// If editing
$editing = false;
$edit_class = null;
if (isset($_GET['edit'])) {
    $editing = true;
    $class_id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM classes WHERE id = $class_id");
    $edit_class = $result->fetch_assoc();
}

// Load all classes
$classes = $conn->query("SELECT * FROM classes ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Classes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 90px; /* Space for navbar */
        }

        .navbar-custom {
            background-color:rgb(27, 88, 154);
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

        .btn-dashboard {
            margin-top: 20px;
        }
    </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid px-4">
        <span class="navbar-brand">Manage Classes</span>
        <div class="d-flex ms-auto">
            <a href="1.php" class="btn btn-outline-light btn-sm">Back to Dashboard</a>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container mt-4">
    <h2 class="mb-4">Manage Fitness Classes</h2>

    <!-- Class Form -->
    <div class="card p-4 mb-4 shadow-sm">
        <h4><?= $editing ? 'Edit Class' : 'Add New Class' ?></h4>
        <form method="POST">
            <?php if ($editing): ?>
                <input type="hidden" name="id" value="<?= $edit_class['id'] ?>">
            <?php endif; ?>
            <div class="mb-3">
                <label for="name" class="form-label">Class Name</label>
                <input type="text" class="form-control" name="name" value="<?= $editing ? htmlspecialchars($edit_class['name']) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="schedule" class="form-label">Schedule</label>
                <input type="text" class="form-control" name="schedule" value="<?= $editing ? htmlspecialchars($edit_class['schedule']) : '' ?>" required>
            </div>
            <button type="submit" name="<?= $editing ? 'update_class' : 'add_class' ?>" class="btn btn-<?= $editing ? 'warning' : 'primary' ?>">
                <?= $editing ? 'Update Class' : 'Add Class' ?>
            </button>
            <?php if ($editing): ?>
                <a href="manage_classes.php" class="btn btn-secondary">Cancel</a>
            <?php endif; ?>
        </form>
    </div>

    <!-- Class Table -->
    <h4>Existing Classes</h4>
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>Class Name</th>
                <th>Schedule</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($class = $classes->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($class['name']) ?></td>
                    <td><?= htmlspecialchars($class['schedule']) ?></td>
                    <td>
                        <a href="?edit=<?= $class['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="?delete=<?= $class['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this class?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</div>

</body>
</html>
