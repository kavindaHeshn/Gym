<?php
include '../configuration/config.php';

// SQL query to get all data from the membership table
$sql = "SELECT * FROM membership";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Styling for the header */
        header {
            background-color:rgb(26, 97, 173); /* Blue header */
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        /* Container styling */
        .container {
            margin-top: 30px;
        }

        /* Table margin and padding */
        table {
            margin-top: 20px;
            margin-bottom: 40px;
            padding: 20px;
        }

        /* Table borders and styling */
        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        /* Table striping */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<header>
    <h2>Membership Records</h2>
</header>

<div class="container">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Plan</th>
                <th>Trainer</th>
                <th>Notes</th>
                <th>Payment Method</th>
                <th>Bank Name</th>
                <th>Account Number</th>
                <th>Account Holder Name</th>
                <th>OTP Code</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['fullname']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['plan']}</td>
                        <td>{$row['trainer']}</td>
                        <td>{$row['notes']}</td>
                        <td>{$row['payment_method']}</td>
                        <td>{$row['bank_name']}</td>
                        <td>{$row['account_number']}</td>
                        <td>{$row['account_holder_name']}</td>
                        <td>{$row['otp_code']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='11' class='text-center'>No membership records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
