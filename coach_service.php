<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Section</title>
    <link rel="stylesheet" href="../css/stylcoach_service.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FitZone Fitness Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/customer.php">View Gym Overview|</a></li>
                <li class="nav-item"><a class="nav-link" href="custamer.php">View Gym Overview|</a></li>

                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/membership.php">Membership Plans|</a></li>
                <li class="nav-item"><a class="nav-link" href="../frontend/coach.php">Coach Service|</a></li>
                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/shop.php">Shop</a></li>   </ul>
                <div class="login-btn">
                <a href="../authentication/logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>
<br><br><br>
    <div class="gallery">
        <h5> <span>Fitness Classes & Services</span></h5>

        <div class="gallery_image_box">
            <div class="gallery_image">
                <div class="image_container">
                    <img src="../images/Personal_Training.webp" alt="Personal_Training image">
                    <div class="overlay">
                        <h6>Personal Training</h6>
                        <p>One-to-One Training with a Certified Trainers.</p>
                        <a href="../frontend/personal_training.php" class="gallery_btn">VIEW NOW</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery">
       

        <div class="gallery_image_box">
            <div class="gallery_image">
                <div class="image_container">
                    <img src="../images/Strength Training.jpeg" alt="Strength Training image">
                    <div class="overlay">
                        <h6>Strength Training</h6>
                        <p>Weightlifting, Resistance Training.</p>
                        <a href="../frontend/strength_training.php" class="gallery_btn">VIEW NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gallery">
       

        <div class="gallery_image_box">
            <div class="gallery_image">
                <div class="image_container">
                    <img src="../images/yoga.jpg" alt="yoga image">
                    <div class="overlay">
                        <h6>Yoga & Flexibility</h6>
                        <p>Yoga, Pilates, Stretching Sessions.</p>
                        <a href="../frontend/yoga.php" class="gallery_btn">VIEW NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gallery">
        

        <div class="gallery_image_box">
            <div class="gallery_image">
                <div class="image_container">
                    <img src="../images/zumba.jpg" alt="zumba image">
                    <div class="overlay">
                        <h6>Group Classes</h6>
                        <p>Zumba, Aerobics, CrossFit.</p>
                        <a href="../frontend/gruop_class.php" class="gallery_btn">VIEW NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="gallery">
       

        <div class="gallery_image_box">
            <div class="gallery_image">
                <div class="image_container">
                    <img src="../images/gymdiet.jpg" alt="gymdiet image">
                    <div class="overlay">
                        <h6>Nutrition Counseling</h6>
                        <p> Meal Planning & Diet Consultation.</p>
                        <a href="../frontend/nutrition_con.php" class="gallery_btn">VIEW NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
</body>
</html>
