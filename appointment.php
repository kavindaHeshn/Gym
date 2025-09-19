<?php
include '../configuration/config.php';

// Fetch all appointments
$query = "SELECT * FROM appointments";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Appointments</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #f4f7f6;
            color: #333;
            padding-top: 100px; /* Add top padding for fixed navbar */
        }

        .container {
            width: 90%;
            margin: auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2em;
            color: #1f3a50;
        }

        /* Navbar */
        .navbar-custom {
            background-color: #0077b6;
            height: 80px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar-custom .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin-left: 10px;
        }

        .navbar-custom .btn {
            background-color: #0096c7;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 14px;
            border-radius: 5px;
            margin-left: auto;
        }

        .navbar-custom .btn:hover {
            background-color: #0077b6;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #0077b6;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Search Bar */
        .search-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .search-container input {
            padding: 10px;
            width: 250px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        .search-container button {
            padding: 10px 15px;
            background-color: #0077b6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #0096c7;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 100%;
            }

            .search-container input {
                width: 200px;
            }

            .navbar-custom {
                padding: 0 10px;
            }
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar-custom">
        <span class="navbar-brand">FitZone Gym</span>
        <div class="d-flex">
            <a href="1.php" class="btn">Back to Dashboard</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2>Manage Appointments</h2>

        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search by Appointment ID or Customer ID">
            <button onclick="searchAppointments()">Search</button>
        </div>

        <!-- Appointments Table -->
        <table id="appointmentsTable">
            <thead>
                <tr>
                    <th>Appointment ID</th>
                    <th>Customer ID</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($appointment = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $appointment['id']; ?></td>
                        <td><?php echo $appointment['customer_id']; ?></td>
                        <td><?php echo $appointment['appointment_date']; ?></td>
                        <td><?php echo $appointment['appointment_time']; ?></td>
                        <td>
                            <a href="edit_appointment.php?id=<?php echo $appointment['id']; ?>" style="color: #0077b6;">Edit</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        function searchAppointments() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#appointmentsTable tbody tr');

            rows.forEach(row => {
                const appointmentId = row.cells[0].textContent.toLowerCase();
                const customerId = row.cells[1].textContent.toLowerCase();

                if (appointmentId.includes(searchTerm) || customerId.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>
