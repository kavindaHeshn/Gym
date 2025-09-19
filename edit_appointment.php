<?php
include '../configuration/config.php';

if (isset($_GET['id'])) {
    $appointment_id = $_GET['id'];
    $query = "SELECT * FROM appointments WHERE id = $appointment_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $appointment = mysqli_fetch_assoc($result);
    } else {
        die("Appointment not found!");
    }
} else {
    die("Invalid request!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Edit Appointment</h2>
        <form action="../admin_panel/update_appointment.php" method="POST">
            <input type="hidden" name="appointment_id" value="<?php echo $appointment['id']; ?>">

            <div class="mb-3">
                <label class="form-label">Customer ID</label>
                <input type="number" name="customer_id" class="form-control" value="<?php echo $appointment['customer_id']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Appointment Date</label>
                <input type="date" name="appointment_date" class="form-control" value="<?php echo $appointment['appointment_date']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Appointment Time</label>
                <input type="time" name="appointment_time" class="form-control" value="<?php echo $appointment['appointment_time']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">User ID</label>
                <input type="number" name="user_id" class="form-control" value="<?php echo $appointment['user_id']; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Class ID</label>
                <input type="number" name="class_id" class="form-control" value="<?php echo $appointment['class_id']; ?>">
            </div>

            <button type="submit" class="btn btn-success">Update Appointment</button>
            <a href="manage_appointments.php" class="btn btn-secondary mt-2 w-100">Cancel</a>
        </form>
    </div>
</body>
</html>
