<?php
// Include the database configuration file
include '../configuration/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $day = $_POST['day'];
    $workout = $_POST['workout'];
    $description = $_POST['description'];

    // Insert query
    $sql = "INSERT INTO gym_schedule (day, workout, description) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $day, $workout, $description);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Workout plan added successfully!'); window.location.href='view_workout_schedule.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gym Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mb-4">Add Gym Workout Plan</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <input type="text" class="form-control" id="day" name="day" required>
        </div>
        <div class="mb-3">
            <label for="workout" class="form-label">Workout</label>
            <input type="text" class="form-control" id="workout" name="workout" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Workout</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
