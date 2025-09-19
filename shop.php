<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Shop</title>
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="../css/navbar1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
       
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 24px;
        }

        .shop-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .product {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 15px;
            margin: 15px;
            text-align: center;
            width: 250px;
        }

        .product img {
            width: 100%;
            border-radius: 10px;
        }

        .price {
            font-size: 18px;
            color: #27ae60;
            font-weight: bold;
        }

        .add-to-cart {
            background: #27ae60;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            margin-top: 10px;
        }

        .add-to-cart:hover {
            background: #219150;
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

    <header>
        <h1>FitZone Gym Shop</h1>
    </header>

    <section class="shop-container">
        <div class="product">
            <img src="../images/whyy.jpeg" alt="Whey Protein">
            <h2>Ashwaganda oil</h2>
            
            <span class="price">LKR 4000</span>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
            <img src="../images/download.jpeg" alt="Creatine Monohydrate">
            <h2>Creatine Monohydrate</h2>
            <p>Boost strength and power during workouts.</p>
            <span class="price">LKR 3000</span>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
            <img src="../images/download (1).jpeg" alt="Gym Gloves">
            <h2>Gym Gloves</h2>
            <p>Protect your hands with high-grip gloves.</p>
            <span class="price">LKR 2100</span>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
            <img src="../images/image-removebg-preview_23.webp" alt="Protein Shaker">
            <h2>Protein Shaker</h2>
            <p>Leak-proof shaker for protein shakes.</p>
            <span class="price">LKR 10000</span>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
        <img src="../images/images.jpeg" alt="BCAA">
        <h2>BCAA Powder</h2>
        <p>Helps with muscle recovery and endurance.</p>
        <span class="price">LKR 12000</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/3-min.webp" alt="Weightlifting Belt">
        <h2>Weightlifting Belt</h2>
        <p>Provides back support during heavy lifts.</p>
        <span class="price">LKR 3000</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>

    <div class="product">
        <img src="../images/cerberus-ultra-knee-wraps-1.jpg" alt="Knee Wraps">
        <h2>Knee Wraps</h2>
        <p>Extra support for heavy squats and deadlifts.</p>
        <span class="price">LKR 1500</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>

    <div class="product">
        <img src="../images/2.webp" alt="Adjustable Dumbbells">
        <h2>Adjustable Dumbbells</h2>
        <p>Perfect for home workouts.</p>
        <span class="price">LKR 5100</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/-Pcs.jpg" alt="Resistance Bands">
        <h2>Resistance Bands</h2>
        <p>Improve strength and flexibility.</p>
        <span class="price">LKR 1100</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/800x.webp" alt="Treadmill">
        <h2>Treadmill</h2>
        <p>Advanced running machine with speed settings.</p>
        <span class="price">LKR 350000</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/1600.jpg" alt="Foam Roller">
        <h2>Foam Roller</h2>
        <p>Reduces muscle tension and improves recovery.</p>
        <span class="price">LKR 2000</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/QL80_.jpg" alt="Gym Towel">
        <h2>Gym Towel</h2>
        <p>High-absorbent and quick-dry towel.</p>
        <span class="price">LKR 950</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/powder.jpg" alt="Pre-Workout">
        <h2>Pre-Workout Powder</h2>
        <p>Boosts energy and focus for intense workouts.</p>
        <span class="price">LKR 1500</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/ym5-600x440@2x.jpg" alt="Yoga Mat">
        <h2>Yoga Mat</h2>
        <p>Comfortable and anti-slip design.</p>
        <span class="price">LKR 1200</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>

    <div class="product">
        <img src="../images/123.jpeg" alt="Water Bottle">
        <h2>Water Bottle</h2>
        <p>BPA-free, durable, and leak-proof.</p>
        <span class="price">LKR 1550</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/Jump Rope.jpg" alt="Jump Rope">
        <h2>Jump Rope</h2>
        <p>Great for cardio and endurance training.</p>
        <span class="price">LKR 990</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/Hand Gripper.jpg" alt="Hand Gripper">
        <h2>Hand Gripper</h2>
        <p>Strengthens grip and forearm muscles.</p>
        <span class="price">LKR 800</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/Ankle Weights.jpeg" alt="Ankle Weights">
        <h2>Ankle Weights</h2>
        <p>Enhance leg strength and endurance.</p>
        <span class="price">LKR 2300</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../images/image-removebg-preview_23.webp" alt="Protein Shaker">
        <h2>Protein Shaker</h2>
        <p>Leak-proof shaker for protein shakes.</p>
        <span class="price">LKR 1890</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/mas.jpeg" alt="Mass Gainer">
        <h2>Mass Gainer</h2>
        <p>Supports muscle gain and weight management.</p>
        <span class="price">LKR 3800</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/Wrist Wraps.jpg" alt="Wrist Wraps">
        <h2>Wrist Wraps</h2>
        <p>Provides wrist support during heavy lifts.</p>
        <span class="price">LKR 2300</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/Ab Roller.jpg" alt="Ab Roller">
        <h2>Ab Roller</h2>
        <p>Strengthen core muscles effectively.</p>
        <span class="price">LKR 3000</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/Sauna Suit.jpg" alt="Sauna Suit">
        <h2>Sauna Suit</h2>
        <p>Enhances sweating and weight loss.</p>
        <span class="price">LKR 3500</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="../images/Grip Strengthener.jpg" alt="Grip Strengthener">
        <h2>Grip Strengthener</h2>
        <p>Improves hand and forearm strength.</p>
        <span class="price">LKR 2600</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    </section>

</body>
</html>
