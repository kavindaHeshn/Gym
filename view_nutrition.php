<?php
include '../configuration/config.php'; // Make sure config.php defines $conn

// Fetch all records from the nutrition_plans table
$sql = "SELECT * FROM nutrition_plans ORDER BY id DESC"; // You can adjust the ORDER BY clause as needed
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Nutrition Plans</title>
    <style>
        /* Global Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('../images/1566.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .brand {
            font-size: 28px;
            font-weight: bold;
            color: #1abc9c;
        }

        .navbar a {
            background-color: #3498db;
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #2980b9;
        }

        .main-container {
            max-width: 1100px;
            margin: 60px auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.5);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #f9f9f9;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #1abc9c;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #3498db;
            text-decoration: none;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Custom Navbar -->
    <div class="navbar">
        <div class="brand">View Nutrition Plans</div>
        <a href="../staff_dashboard/1.php">Back to Dashboard</a>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        <h3>Nutrition Plan Records</h3>

        <?php
        if ($result->num_rows > 0) {
            // Table to display the data
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Customer Name</th>';
            echo '<th>Day</th>';
            echo '<th>Breakfast</th>';
            echo '<th>Lunch</th>';
            echo '<th>Snacks</th>';
            echo '<th>Dinner</th>';
            echo '<th>Protein (grams)</th>';
            echo '<th>Carbs (grams)</th>';
            echo '<th>Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            // Loop through the records and display them
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['customer_name']) . '</td>';
                echo '<td>' . htmlspecialchars($row['day']) . '</td>';
                echo '<td>' . nl2br(htmlspecialchars($row['breakfast'])) . '</td>';
                echo '<td>' . nl2br(htmlspecialchars($row['lunch'])) . '</td>';
                echo '<td>' . nl2br(htmlspecialchars($row['snacks'])) . '</td>';
                echo '<td>' . nl2br(htmlspecialchars($row['dinner'])) . '</td>';
                echo '<td>' . htmlspecialchars($row['protein']) . '</td>';
                echo '<td>' . htmlspecialchars($row['carbs']) . '</td>';
                echo '<td><a href="edit_nutrition.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_nutrition.php?id=' . $row['id'] . '">Delete</a></td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo "<p>No nutrition plans found.</p>";
        }

        // Close the connection
        $conn->close();
        ?>
    </div>

</body>
</html>
