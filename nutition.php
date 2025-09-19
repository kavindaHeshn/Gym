<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Nutrition Plan and Gym Schedule</title>
  <style>
    /* Global Styling */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-image: url('../images/1566.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: fixed;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.9);
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar .brand {
      font-size: 28px;
      font-weight: bold;
      color: #1abc9c;
    }

    .navbar a {
      background-color: #3498db;
      color: white;
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 8px;
      font-size: 14px;
      transition: background-color 0.3s ease;
    }

    .navbar a:hover {
      background-color: #2980b9;
    }

    .main-container {
      max-width: 1100px;
      margin: 60px auto;
      padding: 30px;
      background-color: rgba(0, 0, 0, 0.7);
      border-radius: 20px;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.5);
    }

    .card {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    }

    h3 {
      text-align: center;
      margin-bottom: 25px;
      color: #1abc9c;
      font-weight: bold;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #2c3e50;
      font-weight: 600;
    }

    input[type="text"],
    input[type="number"],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
      font-size: 15px;
      transition: 0.3s;
    }

    input:focus,
    select:focus,
    textarea:focus {
      outline: none;
      border-color: #1abc9c;
      box-shadow: 0 0 6px rgba(26, 188, 156, 0.5);
    }

    .btn-submit {
      width: 100%;
      padding: 14px;
      background-color: #e67e22;
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #d35400;
      transform: scale(1.03);
    }

    @media (max-width: 768px) {
      .main-container {
        margin: 30px 20px;
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Custom Navbar -->
  <div class="navbar">
    <div class="brand">Nutrition Plan</div>
    <a href="../staff_dashboard/1.php">Back to Dashboard</a>
  </div>

  <!-- Main Container -->
  <div class="main-container">
    <div class="card">
      <h3>Add Nutrition Plan (Day-wise)</h3>
      <form id="nutritionForm" action="nutitionback.php" method="POST">
        <label for="customerName">Customer Name</label>
        <input type="text" name="customerName" id="customerName" required>

        <label for="day">Select Day</label>
        <select name="day" id="day" required>
          <option value="">-- Select Day --</option>
          <option value="Sunday">Sunday</option>
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
          <option value="Saturday">Saturday</option>
        </select>

        <label for="breakfast">Breakfast</label>
        <textarea name="breakfast" id="breakfast" rows="2" required></textarea>

        <label for="lunch">Lunch</label>
        <textarea name="lunch" id="lunch" rows="2" required></textarea>

        <label for="snacks">Snacks</label>
        <textarea name="snacks" id="snacks" rows="2" required></textarea>

        <label for="dinner">Dinner</label>
        <textarea name="dinner" id="dinner" rows="2" required></textarea>

        <label for="protein">Protein (grams)</label>
        <input type="number" name="protein" id="protein" required>

        <label for="carbs">Carbohydrates (grams)</label>
        <input type="number" name="carbs" id="carbs" required>

        <button type="submit" class="btn-submit">Submit Nutrition Plan</button>
      </form>
    </div>
  </div>

</body>
</html>
