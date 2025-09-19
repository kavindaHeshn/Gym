<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Coaching</title>
    <link rel="stylesheet" href="../css/coach.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">FitZone Fitness Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="gymstaff.php">Gym Staff</a></li>
                    <li class="nav-item"><a class="nav-link" href="coach_service.php">Coach Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="feedback.php">Customer Feedback</a></li>
                </ul>
                <div class="login-btn">
                    <a href="../frontend/login.php" class="btn btn-danger">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header>
        <h1>FitZone Fitness Center Coach Service</h1>
    </header>

    <!-- Personal Training Section (Vertical Layout) -->
    <main>
        <section class="coaching text-center" id="coaching">
            <h2 class="section-title">Personal Training</h2><br><br><br>
            <img src="../images/Personal_Training.webp" alt="Coaching Session" class="img-fluid">
            <div class="info mt-4">
                <p>
                    Get paired with your perfect fit. Our coaches are experts in <br>
                    their individual disciplines. We’ll match you with the right<br>
                    coach, who will design a plan unique to your goals,<br>
                    lifestyle and experience. From Muay Thai to functional fitness,<br>
                    beginner to competitive athlete, we have a coach for you!
                </p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
        <p>&copy; 2025 FitZone Fitness Center. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #111;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            text-align: center;
            padding: 2rem;
            background-color: #222;
            margin-bottom: 2rem;
        }

        .coaching {
            max-width: 5000px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #1c1c1c;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .section-title {
            font-size: 3rem;
            color: #f44336;
            margin-bottom: 1.5rem;
        }

        .coaching img {
            width: 50%;
            height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }

        .info {
            margin-top: 2rem;
        }

        .info p {
            font-size: 1rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .coaching img {
                width: 100%;
                height: auto;
            }

            .info {
                margin-top: 1rem;
            }
        }
    </style>

</body>
</html>
