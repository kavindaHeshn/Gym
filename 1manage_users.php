<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Fitness Classes</title>
</head>
<body>

<h2>Manage Fitness Classes</h2>

<h3>Add New Class</h3>
<form action="../admin_panel/manage_users.php" method="POST">
    <label for="name">Class Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="schedule">Class Schedule:</label>
    <input type="text" id="schedule" name="schedule" required><br>
    <button type="submit" name="add_class">Add Class</button>
</form>

<h3>Existing Classes</h3>
<table border="1">
    <tr>
        <th>Class Name</th>
        <th>Schedule</th>
        <th>Actions</th>
    </tr>

    <?php while ($class = $classes->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($class["name"]) ?></td>
            <td><?= htmlspecialchars($class["schedule"]) ?></td>
            <td>
            
                <a href="?delete=<?= $class["id"] ?>" onclick="return confirm('Are you sure you want to delete this class?')">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<br>
<a href="../admin_panel/dashboard.php">Back to Admin Dashboard</a> | <a href="../authentication/logout.php">Logout</a>

</body>
</html>
