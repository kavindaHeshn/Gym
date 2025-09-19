<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - FitZone Fitness Center</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="video-container">
        <video autoplay loop muted>
            <source src="../images/videoplayback.mp4" type="video/mp4">
            <source src="videoplayback.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
        </video>
        <div class="video-title">   FitZone Fitness Center    </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FitZone Fitness Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                   
                    <li class="nav-item"><a class="nav-link" href="staff.html">Gym Staff</a></li>
                    <li class="nav-item"><a class="nav-link" href="coach.php">Coach Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.php">Contact</a></li>
                   
                    <li class="nav-item"><a class="nav-link" href="feedback.php">Customer Feedback</a></li>
                </ul>
                <div class="login-btn">
                  <a href="../frontend/login.php" class="login.php">Login</a>
                 </div>

            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
