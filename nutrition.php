<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Nutrition Guide</title>
    <link rel="stylesheet" href="nutrition.css"> 
    <link rel="stylesheet" href="../css/navbar1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #27ae60;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 26px;
            font-weight: bold;
        } 

        body {
            font-family: 'Arial', sans-serif;
            background: url('../images/nutution1.jpeg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        header {
            background: rgba(18, 48, 156, 0.7);
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 28px;
            font-weight: bold;
        }
        .nutrition-container {
            max-width: 900px;
            margin: 30px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .day-title {
            font-size: 24px;
            color: #27ae60;
            text-align: center;
            margin-bottom: 20px;
        }
        .meal {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h3 {
            margin-bottom: 5px;
            color: #222;
        }
        p {
            margin: 5px 0;
        }
        .calories {
            font-weight: bold;
            color: #27ae60;
            display: block;
            margin-top: 5px;
        }

        .nutrition-container {
            max-width: 900px;
            margin: 20px auto;
            padding: 30px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .nutrition-plan {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 10px;
            background: #f0f4f4;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .nutrition-plan h3 {
            color: #27ae60;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .nutrition-plan .meal-details {
            margin-left: 20px;
        }

        .nutrition-plan .meal-details h4 {
            color: #2c3e50;
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .meal-details ul {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .meal-details li {
            margin: 5px 0;
            font-size: 16px;
            color: #34495e;
        }

        .meal-details p {
            margin: 5px 0;
            font-size: 16px;
            color: #34495e;
        }

        .meal-container {
            margin-bottom: 10px;
        }

        .nutrition-plan .meal-details ul li {
            margin-left: 20px;
        }

        .meal-title {
            font-weight: bold;
            color: #2c3e50;
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
                <li class="nav-item"><a class="nav-link" href="custamer.php">Gym Overview</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Class Schedules</a></li>
                <li class="nav-item"><a class="nav-link" href="location.php">Personal Training</a></li>
                <li class="nav-item"><a class="nav-link" href="membership.php">Membership Plans</a></li>
                <li class="nav-item"><a class="nav-link" href="nutrition.php">Nutrition Guide</a></li>
                <li class="nav-item"><a class="nav-link" href="custamer_home1.php">Coach Service</a></li>
            </ul>
            <div class="login-btn">
                <a href="../frontend/login.php" class="login.php">Login</a>
            </div>
        </div>
    </div>
</nav>

<header>
    <h1>FitZone Monthly Nutrition Guide</h1>
</header>

<section class="nutrition-container">
    <div class="nutrition-plan">
        <h3>Day 01 Meal Plan</h3>
        <div class="meal-details">
            <div class="meal-container">
                <h4 class="meal-title">Breakfast</h4>
                <p>Oats (1.5 cups cooked) + 3 egg whites + 1 banana</p>
                <ul>
                    <li>Calories: ~400 kcal</li>
                    <li>Protein: 20g</li>
                    <li>Carbs: 65g</li>
                    <li>Fats: 7g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Mid-Morning Snack</h4>
                <p>1 brown bread slice + 40g grilled chicken</p>
                <ul>
                    <li>Calories: ~200 kcal</li>
                    <li>Protein: 20g</li>
                    <li>Carbs: 25g</li>
                    <li>Fats: 5g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Lunch</h4>
                <p>2 cups basmati/nadu rice + ½ cup dhal curry + 1 cup gotukola mallum + 2 slices chicken + 1 non-fat yogurt</p>
                <ul>
                    <li>Calories: ~800 kcal</li>
                    <li>Protein: 45g</li>
                    <li>Carbs: 110g</li>
                    <li>Fats: 15g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Evening Snack</h4>
                <p>1 cup ginger tea/coffee + 2 bran crackers + 4-6 almonds/peanuts</p>
                <ul>
                    <li>Calories: ~200 kcal</li>
                    <li>Protein: 6g</li>
                    <li>Carbs: 20g</li>
                    <li>Fats: 10g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Dinner</h4>
                <p>1.5 cups basmati/nadu rice + 2 servings grilled beef (60g) + 100g steamed broccoli</p>
                <ul>
                    <li>Calories: ~400 kcal</li>
                    <li>Protein: 40g</li>
                    <li>Carbs: 40g</li>
                    <li>Fats: 10g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Pre-Workout Meal</h4>
                <p>Sweet Potato Frittata (2 small sweet potatoes + 4 eggs + ½ cup spinach)</p>
                <ul>
                    <li>Calories: ~400 kcal</li>
                    <li>Protein: 30g</li>
                    <li>Carbs: 40g</li>
                    <li>Fats: 20g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Post-Workout Meal</h4>
                <p>1 glass of protein shake (1 scoop protein powder)</p>
                <ul>
                    <li>Calories: ~150 kcal</li>
                    <li>Protein: 25g</li>
                    <li>Carbs: 3g</li>
                    <li>Fats: 2g</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="nutrition-plan">
        <h3>Day 02 Meal Plan</h3>
        <div class="meal-details">
            <div class="meal-container">
                <h4 class="meal-title">Breakfast</h4>
                <p>1 whole grain roti (100g) + 50g fish curry</p>
                <ul>
                    <li>Calories: ~300 kcal</li>
                    <li>Protein: 25g</li>
                    <li>Carbs: 35g</li>
                    <li>Fats: 10g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Mid-Morning Snack</h4>
                <p>1 slice of papaya (100g) or 1 slice of green apple (100g) or 1 glass of avocado smoothie</p>
                <ul>
                    <li>Calories: ~150 kcal</li>
                    <li>Protein: 1g</li>
                    <li>Carbs: 13g</li>
                    <li>Fats: 0g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Lunch</h4>
                <p>1 cup basmati/nadu rice (200g) + ½ cup mung bean curry + 1 cup cucumber salad + 2 slices chicken curry (100g) + 1 cup yogurt</p>
                <ul>
                    <li>Calories: ~800 kcal</li>
                    <li>Protein: 45g</li>
                    <li>Carbs: 100g</li>
                    <li>Fats: 20g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Evening Snack</h4>
                <p>1 slice of brown bread (40g) + 1 cup non-fat milk + 1 tsp sugar</p>
                <ul>
                    <li>Calories: ~150 kcal</li>
                    <li>Protein: 8g</li>
                    <li>Carbs: 25g</li>
                    <li>Fats: 2g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Dinner</h4>
                <p>1 Ata chapathi (100g) + 100g grilled chicken + 50g steamed broccoli</p>
                <ul>
                    <li>Calories: ~400 kcal</li>
                    <li>Protein: 40g</li>
                    <li>Carbs: 40g</li>
                    <li>Fats: 10g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Pre-Workout Meal</h4>
                <p>100g steamed broccoli + 80g oats + 3 egg whites + ½ cup spinach</p>
                <ul>
                    <li>Calories: ~300 kcal</li>
                    <li>Protein: 40g</li>
                    <li>Carbs: 40g</li>
                    <li>Fats: 5g</li>
                </ul>
            </div>

            <div class="meal-container">
                <h4 class="meal-title">Post-Workout Meal</h4>
                <p>1 glass of protein shake (1 scoop protein powder)</p>
                <ul>
                    <li>Calories: ~150 kcal</li>
                    <li>Protein: 25g</li>
                    <li>Carbs: 3g</li>
                    <li>Fats: 2g</li>
                </ul>
            </div>
        </div>
    </div>
</section>

</body>
</html>
