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
            <source src="../images/STUDIO.mp4" type="video/mp4">
            <source src="STUDIO.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
        </video>
        <div class="video-title">FitZone Fitness Center</div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FitZone Fitness Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="../customer_dashboard/customer.php">View Gym Overview|</a></li>
                    <li class="nav-item"><a class="nav-link" href="../customer_dashboard/contact.php">Check Class Schedules|</a></li>
                    <li class="nav-item"><a class="nav-link" href="../customer_dashboard/membership.php">Membership Plans|</a></li>
                    <li class="nav-item"><a class="nav-link" href="../customer_dashboard/coach_service.php">Coach Service|</a></li>
                    <li class="nav-item"><a class="nav-link" href="../customer_dashboard/shop.php">Shop|</a></li>
                </ul>
                <div class="login-btn">
                <a href="../authentication/logout.php" class="btn btn-danger">Logout</a>
                 </div>

            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
