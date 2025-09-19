<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Home Gym</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        
        body {
            background-image: url('../images/custamer.webp'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: white; 
        }
        
        section {
            text-align: center;
            padding: 50px 0;
            background: rgba(0, 0, 0, 0.6); 
            margin: 20px;
            border-radius: 10px;
        }

        
        h1 {
            font-family: 'Times New Roman', serif;
            text-align: center;
            color: white;
            font-size: 100px; 
            font-weight: bold;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            transition: color 0.3s ease-in-out;
            margin-top: 50px;
        }

        h1:hover {
            color: red; 
            cursor: pointer;
        }

        h2 {
            text-align: center;
        }

        nav {
            text-align: center;
            margin-top: 80px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            font-family: 'Times New Roman', serif;
            font-size: 50px; 
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            transition: color 0.3s ease-in-out;
            margin: 20px 0; 
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px;
        }

        nav ul li a:hover {
            color: redDodgerBlue;
            cursor: pointer;
        }

        button {
            padding: 10px 20px;
            background-color: #ff6600;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #ff4500;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .gallery_btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    background-color: #ff6600;
    color: rgb(28, 18, 18);
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s;
}

.gallery_btn:hover {
    background-color: #cc5500;
}

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">FitZone Fitness Center</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/customer.php">View Gym Overview|</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Check Class Schedules|</a></li>
                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/membership.php">Membership Plans|</a></li>
                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/coach_service.php">Coach Service|</a></li>
                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/shop.php">Shop</a></li>
            </ul>
            <div class="login-btn">
                <a href="..../authentification/logout.php" class="login.php">Logout</a>
            </div>
        </div>
    </div>
</nav>

<header>
    <h1><u>Customer Home Gym</u></h1>
    <h1><u>-----------------</u><br></h1>
</header>



<section >
    <h2>Membership Plans</h2>
    <a href="../custamer/view_membership.php" class="gallery_btn">VIEW NOW</a>
</section>

<section >

    <h2>Nutrition Guide</h2>
    <a href="../frontend/nutrition.php" class="gallery_btn">VIEW NOW</a>

</section>

<section >

    <h2>Nutrition plan</h2>
    <a href="../custamer/view_nutrition.php" class="gallery_btn">VIEW NOW</a>

</section>

<section >
    <h2>Contact Coach</h2>
    <a href="../staff_dashboard/feedback.php" class="gallery_btn">VIEW NOW</a>
</section>

<section >
    <h2>Feedback</h2>
    <a href="../custamer/feedback.php" class="gallery_btn">VIEW NOW</a>
</section>

<section >
    <h2>Workout Schedule</h2>
    <a href="../frontend/view_classes.php" class="gallery_btn">VIEW NOW</a>
</section>


<section >
    <h2>Appointments</h2>
    <a href="../custamer/appointment1.php" class="gallery_btn">VIEW NOW</a>
</section>


<section >
    <h2>Training Calendar</h2>
    <a href="../frontend/calender.php" class="gallery_btn">VIEW NOW</a>
</section>


<section >
    <h2>Profile</h2>
    <a href="profile.php" class="gallery_btn">VIEW NOW</a>
</section>


<footer>
    <p>&copy; 2025 Customer Home Gym. All Rights Reserved.</p>
</footer>

</body>
</html>
