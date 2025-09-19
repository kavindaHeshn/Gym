<?php
session_start();
include '../configuration/config.php';

$classes = $conn->query("SELECT * FROM classes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Fitness Classes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Available Fitness Classes</h2>

    <?php if ($classes->num_rows > 0): ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Class Name</th>
                    <th>Schedule</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($class = $classes->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($class["name"]) ?></td>
                        <td><?= htmlspecialchars($class["schedule"]) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No classes available at the moment.</p>
    <?php endif; ?>

    <br>
    <a href="dashboard.php" class="btn btn-secondary">Back to Admin Dashboard</a>
</div>
</body>
</html>
