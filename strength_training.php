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

    <!-- Strength Training Section -->
    <main>
        <section class="coaching" id="strength-training">

        <h2 class="section-title">Strength Training</h2><br><br><br>
            <img src="../images/Strength Training.jpeg" alt="Coaching Session" class="img-fluid">
            <div class="info mt-4">



            


                <p>
                    Strength training, also known as weight training or resistance training, is exercise designed to improve physical strength. It is often associated with the lifting of weights, but can also incorporate techniques such as bodyweight exercises (e.g., push-ups, pull-ups, and squats), isometrics (holding a position under tension, like planks), and plyometrics (explosive movements like jump squats and box jumps).
                </p>
                <p>
                    Training works by progressively increasing the force output of the muscles and uses a variety of exercises and types of equipment. Strength training is primarily an anaerobic activity, although circuit training is also a form of aerobic exercise.
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
            border-radius: 30px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
        }

        .section-title {
            font-size: 2.5rem;
            color: #f44336;
            margin-bottom: 2rem;
        }

        .coaching img {
            width: 60%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }

        .info {
            margin-top: 2rem;
            padding: 1rem;
        }

        .info p {
            font-size: 1rem;
            line-height: 1.8;
        }

        @media (max-width: 768px) {
            .coaching img {
                width: 100%;
                height: auto;
            }

            .section-title {
                font-size: 2rem;
            }

            .info p {
                font-size: 0.95rem;
            }
        }
    </style>

</body>
</html>
