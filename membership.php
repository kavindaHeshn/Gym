<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Plans | FitZone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            background:  white;
            color: #fff;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.9);
            padding: 15px;
        }

        .navbar-brand {
            font-size: 30px;
            font-weight: bold;
            color: white;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            color: white !important;
            font-weight: 600;
            transition: 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #fac031 !important;
        }

        .login-btn a {
            background: #fac031;
            color: black !important;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .login-btn a:hover {
            background: white;
            color: #fac031 !important;
        }

        #membership-hero {
    background: url("../images/1membershipbg.jpg") no-repeat center center/cover;
    text-align: center;
    padding: 100px 20px;
    color: white;
}

@media (max-width: 768px) {
    #membership-hero {
        text-align: left;
        padding: 80px 15px;
    }
}

.membership-cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 50px 15px;
    background-color: #f9f9f9;
    color: black;
}

.membership-card {
    background-color: white;
    padding: 25px;
    border-radius: 10px;
    width: 320px;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.membership-card:hover {
    transform: scale(1.07);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.promotion-card {
    background: url("../images/membership-bg.jpg") no-repeat center center/cover;
    color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    margin: 20px auto;
    max-width: 500px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
        

        #signup-cta {
            background-color: #76b800;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .cta-button {
            background-color: white;
            color: #76b800;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta-button:hover {
            background-color: #e5e5e5;
        }
    </style>
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
                <li class="nav-item"><a class="nav-link" href="contact.php">Check Class Schedules|</a></li>
         
                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/membership.php">Membership Plans|</a></li>
                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/coach_service.php">Coach Service|</a></li>
                <li class="nav-item"><a class="nav-link" href="../customer_dashboard/shop.php">Shop</a></li>   </ul>
                <div class="login-btn">
                <a href="../authentication/logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="membership-hero">
        <div class="hero-content">
            <h1>Membership Plans</h1>
            <p>Choose the plan that fits your lifestyle and fitness goals.</p>
        </div>
    </section>

    <section class="membership-cards">
    <div class="membership-card">
        <h3>Basic Membership</h3>
        <p>LKR 3000/month</p>
        <p>✔ Access to gym equipment</p>
        <p>✔ Locker room access</p>
        <p>✖ No personal training</p>
        <a href="register.php" class="cta-button">Join Now</a>
    </div>
    <div class="membership-card">
        <h3>Standard Membership</h3>
        <p>LKR 5000/month</p>
        <p>✔ Basic membership benefits</p>
        <p>✔ Group fitness classes</p>
        <p>✖ No personal trainer</p>
        <a href="register.php" class="cta-button">Join Now</a>
    </div>
    <div class="membership-card">
        <h3>Premium Membership</h3>
        <p>LKR 7500/month</p>
        <p>✔ Standard membership benefits</p>
        <p>✔ 2 Personal training sessions</p>
        <p>✔ Free diet consultation</p>
        <a href="register.php" class="cta-button">Join Now</a>
    </div>
    <div class="membership-card">
        <h3>Elite Membership</h3>
        <p>LKR 25000/month</p>
        <p>✔ Premium membership benefits</p>
        <p>✔ Unlimited personal training</p>
        <p>✔ Customized workout plan</p>
        <p>✔ Monthly nutrition guidance</p>
        <a href="register.php" class="cta-button">Join Now</a>
    </div>
    <div class="membership-card">
        <h3>Nutrition & Wellness Plan</h3>
        <p>LKR 6000/month</p>
        <p>✔ Personalized diet plans</p>
        <p>✔ Monthly body composition analysis</p>
        <p>✔ One-to-one nutrition coaching</p>
        <a href="register.php" class="cta-button">Join Now</a>
    </div>
</section>


    <section id="special-promotions">
        <div class="promotion-card">
            <h3>Summer Special</h3>
            <p>Get 20% off all memberships for the first three months!</p>
        </div>
        <div class="promotion-card">
            <h3>Refer a Friend</h3>
            <p>Bring a friend along and both of you receive a 10% discount!! </p>
        </div>
    </section>

    <section id="signup-cta">
        <h2>Ready to Join FitZone?</h2>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>