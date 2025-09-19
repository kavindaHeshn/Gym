<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - FitZone Fitness Center</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: black;
            margin: 0;
            padding: 0;
            position: relative;
            color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background: #222;
            color: #fff;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(45deg, #fac031, #f07d2a);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            z-index: 1000;
            padding: 15px 20px;
        }

        .navbar-brand {
            font-size: 30px;
            font-weight: bold;
            color: white;
            letter-spacing: 2px;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .navbar-nav .nav-link:hover {
            background-color: #fac031;
            color: black;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
        }

        .navbar-nav .nav-link.active {
            color: black;
            background-color: #fac031;
            font-weight: bold;
        }

        .login-btn {
            margin-left: auto;
        }

        .login-btn a {
            background: #fac031;
            color: black;
            font-weight: bold;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .login-btn a:hover {
            background: white;
            color: #fac031;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
        }

        /* Dark Mode Button */
        .dark-mode-toggle {
            background-color: transparent;
            border: 2px solid #fac031;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dark-mode-toggle:hover {
            background-color: #fac031;
            color: black;
        }

        /* Sign Up Form Styling */
        .signup-container {
            margin-top: 100px;
            padding: 20px;
            background-color: #111;
            color: #fff;
            border-radius: 10px;
            max-width: 500px;
            margin: 100px auto;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }

        .signup-container h1 {
            margin-bottom: 20px;
        }

        .signup-container form {
            display: flex;
            flex-direction: column;
        }

        .signup-container form label {
            margin: 10px 0 5px;
        }

        .signup-container form input,
        .signup-container form textarea,
        .signup-container form select {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background: #222;
            color: #fff;
        }

        .signup-container form textarea {
            height: 100px;
        }

        .signup-container form button {
            padding: 10px;
            background-color: #fac031;
            color: black;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .signup-container form button:hover {
            background-color: white;
            color: #fac031;
        }

        /* Media Queries */
        @media (max-width: 992px) {
            .navbar {
                padding: 10px 0;
            }

            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-item {
                margin: 5px 0;
            }

            .login-btn {
                margin-top: 10px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a class="navbar-brand">FitZone Fitness Center</a>
        <div class="navbar-nav">
            <a></a>
            <a></a>
            <a></a>
            <a></a>
            <a></a>
            <a></a>
            <a></a>
            <a></a>
            <a></a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link" href="contact.php">Contact</a>
            <a class="nav-link" href="location.php">Location</a>
            <a class="nav-link" href="gymstaff.php">Gym Staff</a>
            <a class="nav-link" href="feedback.php">Customer Feedback</a>
            <a class="nav-link" href="coach.php">Coach Service</a>
        </div>
        <div class="login-btn">
            <a href="../frontend/login.php">Login</a>
        </div>
        <!-- Dark Mode Toggle Button -->
        <button class="dark-mode-toggle" id="darkModeToggle">Dark Mode</button>
    </div>

    <div class="signup-container">
        <h1>Sign Up</h1>
        <form action="../authentication/register.php" method="POST">
            <label>First Name</label>
            <input type="text" name="firstName" placeholder="First Name" required>
            
            <label>Last Name</label>
            <input type="text" name="lastName" placeholder="Last Name" required>
            
            <label>Address</label>
            <input type="text" name="address" placeholder="Your Address" required>
            
            <label>Job Category</label>
            <input type="text" name="jobCategory" placeholder="Job Category" required>
            
            <label>Email</label>
            <input type="email" name="email" placeholder="Your Email" required>
            
            <label>Message</label>
            <textarea name="message" placeholder="Your Message" required></textarea>
            
            <label>Gender</label><br>
            <input type="radio" name="gender" value="M" required> Male
            <input type="radio" name="gender" value="F"> Female<br>
            
            <label>Select Your City</label>
            <select name="city" required>
                <option value="">Anuradapura</option>
                <option value="online_coaching">Colombo</option>
                <option value="solo">kurunagala</option>
                <option value="couple_training">Gampaha</option>
                <option value="personal_training">veyangoda</option>
            </select>
            
            <label>Select Your Package</label>
            <select name="package" required>
                <option value="">Select Package</option>
                <option value="online_coaching">Online Coaching</option>
                <option value="solo">Solo</option>
                <option value="couple_training">Couple Personal Training</option>
                <option value="personal_training">Personal Training</option>
            </select>
            
            <label>Select Your Gym Coach</label>
            <select name="gymCoach" required>
                <option value="">Select Coach</option>
                <option value="kavinda_heshan">Kavinda Heshan</option>
                <option value="heshan_kavinda">Heshan Kavinda</option>
                <option value="wijesundara_karavinda">Wijesundara Karavinda</option>
                <option value="nethmi_amaya">Nethmi Amaya</option>
            </select>
            
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>
            
            <label>Confirm Password</label>
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
            
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>

    <script>
        // Dark Mode Toggle Script
        const toggleButton = document.getElementById('darkModeToggle');
        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>
</html>
