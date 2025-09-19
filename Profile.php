<?php
session_start();
$conn = new mysqli("localhost", "root", "", "sri_lanka1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// LOGIN HANDLER
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        $login_error = "Email and password are required.";
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header("Location: user_panel.php");
                exit();
            } else {
                $login_error = "Invalid password.";
            }
        } else {
            $login_error = "User not found.";
        }
    }
}

// UPDATE PROFILE HANDLER
if (isset($_POST['update'])) {
    $user_id    = $_SESSION['user_id'];
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $address    = $_POST['address'];
    $job_category = $_POST['job_category'];
    $email       = $_POST['email'];
    $message = $_POST['message'];
    $gender     = $_POST['gender'];
    $city     = $_POST['city'];
    $package  = $_POST['package'];
    $gym_coach   = $_POST['gym_coach'];

    if (empty($first_name) || empty($last_name) || empty($address) || empty($email)) {
        echo "<script>alert('Please fill in all fields!'); window.location='user_panel.php';</script>";
    } else {
        $stmt = $conn->prepare("UPDATE users SET 
            first_name=?, 
            last_name=?, 
            address=?, 
            job_category=?,
            email=?, 
            gender=?, 
            message=?, 
            city=?,
            package=?,
            gym_coach=? 
            WHERE id=?");

        $stmt->bind_param("ssssssssssi", $first_name, $last_name, $address, $job_category, $email, $gender, $message, $city, $package, $gym_coach, $user_id);
   
        $stmt->execute();

        echo "<script>alert('Profile updated successfully!'); window.location='user_panel.php';</script>";
    }
}

// LOGOUT HANDLER
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: user_panel.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --primary-color: #5A3D5C; /* Rich Burgundy */
            --secondary-color: #F9C974; /* Warm Gold */
            --accent-color: #F9C74F; /* Bright Yellow */
            --light-bg: #F2F2F2;
            --white-color: #FFFFFF;
            --dark-text: #333333;
            --card-bg: #FFFFFF;
            --input-bg: #E7E7E7;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
        }

        .navbar {
            background-color: var(--primary-color);
            color: var(--white-color);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .navbar .brand {
            font-size: 1.3em;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .navbar .brand img {
            height: 35px;
            margin-left: 10px;
        }

        .navbar .center {
            font-size: 1.2em;
            font-weight: 600;
            text-align: center;
        }

        .navbar .actions a {
            background-color: var(--secondary-color);
            color: var(--white-color);
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 6px;
            margin-left: 10px;
            font-weight: bold;
        }

        .navbar .actions a:hover {
            background-color: var(--accent-color);
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: var(--primary-color);
        }

        form label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: var(--primary-color);
        }

        form input, form select, form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1em;
            background-color: var(--input-bg);
            color: var(--dark-text);
        }

        form button {
            background-color: var(--primary-color);
            color: var(--white-color);
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-size: 1.2em;
            cursor: pointer;
        }

        form button:hover {
            background-color: var(--accent-color);
        }

        .login-box {
            max-width: 400px;
            margin: 100px auto;
            background-color: var(--white-color);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .login-box h2 {
            margin-bottom: 20px;
            text-align: center;
            color: var(--primary-color);
        }

        @media screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .navbar .center {
                text-align: left;
            }

            .container {
                margin: 20px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<?php if (!isset($_SESSION['user_id'])): ?>
    <div class="login-box">
        <h2>Login</h2>
        <?php if (isset($login_error)) echo "<p style='color:red;'>$login_error</p>"; ?>
        <form method="POST">
            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>
    </div>

<?php else: ?>
    <?php
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    ?>

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="brand">
            Fitzone Fitness
            <img src="../Images/newlogo.png" alt="Fitzone Logo">
        </div>
        <div class="center">Profile Management</div>
        <div class="actions">
            <a href="user_panel.php?logout=true">Logout</a>
            <a href="javascript:history.back()">Back</a>
        </div>
    </div>

    <!-- USER PROFILE FORM -->
    <div class="container">
        <h2>Update Your Profile</h2>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php echo $user['first_name']; ?>" required>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php echo $user['last_name']; ?>" required>

            <label>Email</label>
            <input type="email" name="email" value="<?php echo $user['email']; ?>" required>

            <label>Address</label>
            <input type="text" name="address" value="<?php echo $user['address']; ?>" required>

            <label>City</label>
            <input type="text" name="city" value="<?php echo $user['city']; ?>" required>

            <label>Gender</label>
            <select name="gender">
                <option value="Male" <?php echo ($user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                <option value="Female" <?php echo ($user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                <option value="Other" <?php echo ($user['gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
            </select>

            <label>Job Category</label>
            <input type="text" name="job_category" value="<?php echo $user['job_category']; ?>" required>

            <label>Package</label>
            <input type="text" name="package" value="<?php echo $user['package']; ?>" required>

            <label>Gym Coach</label>
            <input type="text" name="gym_coach" value="<?php echo $user['gym_coach']; ?>" required>

            <label>Message</label>
            <textarea name="message" rows="4" required><?php echo $user['message']; ?></textarea>

            <button type="submit" name="update">Update Profile</button>
        </form>
    </div>

<?php endif; ?>

</body>
</html>
