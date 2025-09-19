<?php
include '../configuration/config.php';
$users = $conn->query("SELECT id, first_name, email FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management</title>

    <!-- Removed Bootstrap CDN -->
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f4f4;
            padding-top: 140px;
            margin: 0;
        }

        .navbar-custom {
            background-color: rgb(35, 86, 141);
            height: 120px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            color: white;
            justify-content: space-between;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar-custom .navbar-brand {
            font-size: 40px;
            font-weight: bold;
        }

        .navbar-custom a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
            padding: 6px 12px;
            border: 1px solid white;
            border-radius: 4px;
            font-size: 14px;
        }

        .navbar-custom a:hover {
            background-color: white;
            color: #23455c;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #23455c;
        }

        .container-custom {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #23455c;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 6px 12px;
            cursor: pointer;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        .search-box {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar-custom">
    <span class="navbar-brand">User Management</span>
    <div>
        <a href="../admin_panel/admin_dashboard.php">Back to Dashboard</a>
        <a href="../authentication/logout.php">Logout</a>
    </div>
</div>

<!-- Main Content -->
<div class="container-custom mt-5">
    <h2>User List</h2>

    <!-- 🔍 Search -->
    <input type="text" class="search-box" id="userSearch" placeholder="🔍 Search by name or email..." onkeyup="searchUser()">

    <table id="userTable">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($user = $users->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($user["first_name"]) ?></td>
                    <td><?= htmlspecialchars($user["email"]) ?></td>
                    <td>
                        <form method="POST" action="delete_user.php" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            <input type="hidden" name="user_id" value="<?= $user["id"] ?>">
                            <button type="submit" class="btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Script for Search -->
<script>
    function searchUser() {
        const input = document.getElementById("userSearch");
        const filter = input.value.toLowerCase();
        const table = document.getElementById("userTable");
        const tr = table.getElementsByTagName("tr");

        for (let i = 1; i < tr.length; i++) {
            let tdName = tr[i].getElementsByTagName("td")[0];
            let tdEmail = tr[i].getElementsByTagName("td")[1];
            if (tdName || tdEmail) {
                let nameVal = tdName.textContent || tdName.innerText;
                let emailVal = tdEmail.textContent || tdEmail.innerText;
                if (nameVal.toLowerCase().indexOf(filter) > -1 || emailVal.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</body>
</html>
