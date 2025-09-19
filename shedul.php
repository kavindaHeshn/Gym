<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gym Schedule and Weekly Workout</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: #f2f2f2;
      color: #333;
    }

    .container {
      max-width: 900px;
      margin: 30px auto;
      padding: 20px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
      text-align: center;
      color: #2c3e50;
    }

    form {
      margin-bottom: 30px;
    }

    .form-group,
    .container > label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
      font-size: 16px;
    }

    .btn-container {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin: 15px 0;
    }

    .btn {
      flex: 1 1 30%;
      padding: 10px 15px;
      background-color: #3498db;
      border: none;
      border-radius: 8px;
      color: white;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: #2980b9;
    }

    button[type="submit"] {
      width: 100%;
      padding: 12px;
      font-size: 18px;
      background-color: #2ecc71;
      border: none;
      color: white;
      border-radius: 8px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #27ae60;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #34495e;
      color: white;
    }

    .scheduleTable {
      background-color: #f9f9f9;
      margin-bottom: 20px;
      padding: 15px;
      border-radius: 10px;
      display: none;
    }

    .scheduleTable ul {
      padding-left: 20px;
    }

    .rest-day {
      background-color: #ffeaa7;
      padding: 20px;
      font-weight: bold;
      border-radius: 10px;
      display: none;
    }

    @media screen and (max-width: 600px) {
      .btn-container {
        flex-direction: column;
      }

      .btn {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Weekly Workout Schedule</h1>

    <!-- Form to add schedule -->
    <form id="scheduleForm" action="save_schedule.php" method="POST">
      <label for="day">Day</label>
      <input type="text" id="day" name="day" placeholder="e.g. Monday" required>

      <label for="time_slot">Time Slot</label>
      <input type="text" id="time_slot" name="time_slot" placeholder="e.g. 8:00 AM - 10:00 AM" required>

      <label for="activity">Activity</label>
      <input type="text" id="activity" name="activity" placeholder="e.g. Chest workout" required>

      <!-- Hidden fields to store category and exercises -->
      <input type="hidden" id="category" name="category">
      <input type="hidden" id="exercises" name="exercises">

      <!-- Buttons to select workout category -->
      <div class="btn-container">
        <button type="button" class="btn" onclick="setCategory('chest')">Chest</button>
        <button type="button" class="btn" onclick="setCategory('back-core')">Back and Core</button>
        <button type="button" class="btn" onclick="setCategory('shoulders-traps')">Shoulders and Traps</button>
        <button type="button" class="btn" onclick="setCategory('legs')">Legs</button>
        <button type="button" class="btn" onclick="setCategory('arms')">Arms</button>
        <button type="button" class="btn" onclick="setCategory('rest1')">Rest Day 1</button>
        <button type="button" class="btn" onclick="setCategory('rest2')">Rest Day 2</button>
      </div>

      <!-- Submit button to add the schedule -->
      <div class="form-group">
        <button type="submit">Add Schedule</button>
      </div>
    </form>

    <!-- Schedule preview table -->
    <h2>Schedule Preview Table</h2>
    <table id="scheduleTable">
      <thead>
        <tr>
          <th>Day</th>
          <th>Time Slot</th>
          <th>Activity</th>
        </tr>
      </thead>
      <tbody>
        <!-- Dynamic rows go here -->
      </tbody>
    </table>

    <!-- Workout category details -->
    <div id="chest" class="scheduleTable day-exercises">
      <strong>Chest:</strong>
      <ul>
        <li>Bench Press</li>
        <li>Decline Press</li>
        <li>Seated Bench Press</li>
        <li>Incline Dumbbell Press</li>
        <li>Cable Chest Flys</li>
        <li>Pec Deck Flys</li>
        <li>Lever Chest Press</li>
        <li>Pushups</li>
      </ul>
    </div>

    <div id="back-core" class="scheduleTable day-exercises">
      <strong>Back and Core:</strong>
      <ul>
        <li>Ab Crunches</li>
        <li>Rollouts</li>
        <li>Bent-over Rows</li>
        <li>Lat Pull-down</li>
        <li>Pull-ups</li>
        <li>Seated Cable Rows</li>
        <li>Dumbbell Bent Rows</li>
        <li>T-bar Row</li>
      </ul>
    </div>

    <div id="shoulders-traps" class="scheduleTable day-exercises">
      <strong>Shoulders and Traps:</strong>
      <ul>
        <li>Military Press</li>
        <li>Shoulder Press</li>
        <li>Lateral Raises</li>
        <li>Front Raises</li>
        <li>Reverse Flies</li>
        <li>Upright Rows</li>
        <li>Dumbbell Shrugs</li>
        <li>Cable Rotations</li>
      </ul>
    </div>

    <div id="legs" class="scheduleTable day-exercises">
      <strong>Legs:</strong>
      <ul>
        <li>Back Squats</li>
        <li>Deadlifts</li>
        <li>Leg Extensions</li>
        <li>Leg Curls</li>
        <li>Front Squats</li>
        <li>Good Mornings</li>
        <li>Weighted Lunges</li>
        <li>Glute-ham Curl</li>
      </ul>
    </div>

    <div id="arms" class="scheduleTable day-exercises">
      <strong>Arms:</strong>
      <ul>
        <li>Dumbbell Curls</li>
        <li>Skull Crushers</li>
        <li>Cable Curls</li>
        <li>Triceps Push-downs</li>
        <li>Preacher Curls</li>
        <li>Triceps Extensions</li>
        <li>Concentration Curls</li>
        <li>Dips</li>
      </ul>
    </div>

    <div id="rest1" class="day-exercises rest-day">
      <strong>Rest Day</strong>
    </div>

    <div id="rest2" class="day-exercises rest-day">
      <strong>Rest Day</strong>
    </div>

  </div>

  <script>
    // Function to display exercises based on selected category
    function setCategory(id) {
      // Define exercises for each category
      const exercises = {
        chest: ["Bench Press", "Decline Press", "Seated Bench Press", "Incline Dumbbell Press", "Cable Chest Flys", "Pec Deck Flys", "Lever Chest Press", "Pushups"],
        "back-core": ["Ab Crunches", "Rollouts", "Bent-over Rows", "Lat Pull-down", "Pull-ups", "Seated Cable Rows", "Dumbbell Bent Rows", "T-bar Row"],
        "shoulders-traps": ["Military Press", "Shoulder Press", "Lateral Raises", "Front Raises", "Reverse Flies", "Upright Rows", "Dumbbell Shrugs", "Cable Rotations"],
        legs: ["Back Squats", "Deadlifts", "Leg Extensions", "Leg Curls", "Front Squats", "Good Mornings", "Weighted Lunges", "Glute-ham Curl"],
        arms: ["Dumbbell Curls", "Skull Crushers", "Cable Curls", "Triceps Push-downs", "Preacher Curls", "Triceps Extensions", "Concentration Curls", "Dips"],
        rest1: ["Rest Day 1"],
        rest2: ["Rest Day 2"]
      };

      // Set the hidden fields for category and exercises
      document.getElementById("category").value = id;
      document.getElementById("exercises").value = exercises[id].join(", ");
    }

    // Optional: Add more functionality if needed, such as dynamically showing a preview of the selected schedule.
  </script>

</body>
</html>
