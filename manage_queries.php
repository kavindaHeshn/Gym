<?php
// Database connection (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sri_lanka1"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch customer queries
$sql = "SELECT id, customer_name, question, answer, created_at FROM customer_queries";
$result = $conn->query($sql);

// Delete query functionality
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM customer_queries WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Record deleted successfully!'); window.location.href='view_queries.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Queries</title>
    <style>
        /* General body styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f9fb;
            margin: 0;
            padding: 0;
        }

        /* Navbar styles */
        nav {
            background-color: #007BFF; /* Motivational blue color */
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            font-size: 18px;
            text-decoration: none;
            margin: 0 20px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #0056b3; /* Darker blue for hover */
        }

        /* Container styling */
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Header styles */
        h1 {
            color: #333;
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        /* Back button styles */
        .back-button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table thead {
            background-color: #007BFF; /* Blue header */
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table th {
            font-weight: bold;
        }

        /* Empty query message styling */
        p {
            text-align: center;
            font-size: 1.2em;
            color: #333;
        }

        .action-btns {
            display: flex;
            gap: 10px;
        }

        .action-btns a, .action-btns button {
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            background-color: #007BFF; /* Blue buttons */
            color: white;
            border: none;
            cursor: pointer;
        }

        .action-btns a:hover, .action-btns button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <a href="admin_dashboard.php">Home</a>
        
    </nav>

    <div class="container">
        <h1>Customer Queries</h1>

        <!-- Back Button -->
        <button class="back-button" onclick="window.history.back()">Back</button>

        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["customer_name"] . "</td>
                        <td>" . $row["question"] . "</td>
                        <td>" . ($row["answer"] ? $row["answer"] : "Not answered yet") . "</td>
                        <td>" . $row["created_at"] . "</td>
                        <td class='action-btns'>
                            <a href='update_query.php?id=" . $row["id"] . "'>Edit</a>
                            <button onclick='window.location.href=\"?delete_id=" . $row["id"] . "\"'>Delete</button>
                        </td>
                    </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>No queries found.</p>";
        }

        // Close connection
        $conn->close();
        ?>
    </div>
</body>
</html>
