<?php
include '../configuration/config.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e6e6e6; /* Light ash background */
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #004466;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .table-wrapper {
            max-width: 900px;
            margin: 40px auto 0 auto; /* Space between header and table */
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 30px;
            font-size: 2rem;
            color: #333;
            text-align: center;
        }

        .btn-edit {
            text-decoration: none;
        }

        .btn-back {
            display: block;
            margin: 30px auto 0 auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Manage Users</h1>
    </header>

    <div class="container">
        <div class="table-wrapper">
            <h2>User List</h2>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['first_name']; ?></td>
                            <td><?php echo $user['last_name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo ucfirst($user['role']); ?></td>
                            <td>
                                <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="../dashboard.php" class="btn btn-secondary btn-back">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
