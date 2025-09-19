<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FitZone Fitness Center - Staff Dashboard</title>
  <style>
    :root {
      --light-bg: #f2f4f7;
      --dark-bg: #1c1c1c;
      --light-text: #003049;
      --dark-text: #f1f1f1;
      --sidebar-bg-light: #1e2a38;
      --sidebar-bg-dark: #121212;
    }

    [data-theme="dark"] {
      background-color: var(--dark-bg);
      color: var(--dark-text);
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      margin: 0;
      background-color: var(--light-bg);
      transition: background 0.4s, color 0.4s;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: var(--sidebar-bg-light);
      color: #fff;
      padding-top: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: background 0.4s;
    }

    [data-theme="dark"] .sidebar {
      background-color: var(--sidebar-bg-dark);
    }

    .sidebar .logo {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar .logo h2 {
      font-size: 24px;
      color: #00b4d8;
    }

    .sidebar ul {
      list-style: none;
      padding: 0 15px;
    }

    .sidebar ul li {
      margin-bottom: 10px;
    }

    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 17px;
      padding: 12px 15px;
      display: block;
      border-radius: 6px;
      transition: background 0.3s;
    }

    .sidebar ul li a:hover {
      background-color: #32485d;
    }

    .sidebar ul li a.active {
      background-color: #0077b6;
    }

    .sidebar button {
      background-color: #0077b6;
      color: white;
      border: none;
      padding: 10px;
      font-size: 15px;
      border-radius: 6px;
      cursor: pointer;
      margin-bottom: 10px;
      width: 100%;
      transition: background 0.3s;
    }

    .sidebar button:hover {
      background-color: #0096c7;
    }

    .main-content {
      flex: 1;
      padding: 30px;
    }

    .header h1 {
      font-size: 42px;
      color: #003049;
      margin-bottom: 25px;
      text-align: center;
      font-family: 'Segoe UI Black', sans-serif;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    [data-theme="dark"] .header h1 {
      color: #ffffff;
    }

    .video-gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .video-gallery iframe {
      width: 100%;
      max-width: 350px;
      height: 200px;
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }

      .video-gallery {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <div>
      <div class="logo">
        <h2>FitZone</h2>
        <p style="font-size: 13px; color: #a8c0d4;">Web Developer</p>
      </div>
      <ul>
        <li><a href="#" class="active">🔄 Dashboard</a></li>
        <li><a href="Appointments.php">📅 Appointments</a></li>
        <li><a href="Appointment.php">📝 Edit Appointments</a></li>
        <li><a href="cusamerqa.php">❓ Customer Queries</a></li>
        <li><a href="edit_class.php">🏋️‍♂️ Class Management</a></li>
        <li><a href="gym_shedule.php">📆 Gym Schedule</a></li>
        <li><a href="../custamer/nutition.php">🥗 Nutrition Plan</a></li>
        <li><a href="../custamer/GymMembershipPlan.php">💳 Memberships</a></li>
        <li><a href="#">🔔 Notifications</a></li>
      </ul>
    </div>

    <div style="padding: 10px;">
      <button onclick="goBack(../staff_dashboard/staf_dashboard.php)">🔙 Back</button>
      <button onclick="toggleTheme()">🌓 Theme</button>
      <button onclick="logout()">🚪 Logout</button>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="header">
      <h1>Welcome to FitZone Fitness Center</h1>
    </div>

    <div class="video-gallery">
      <iframe src="https://www.youtube.com/embed/X6553zNwZqo" title="Workout Video 1" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/oAPCPjnU1wA" title="Workout Video 2" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/2pLT-olgUJs" title="Workout Video 3" allowfullscreen></iframe>
    </div>
  </div>

  <script>
    function toggleTheme() {
      const currentTheme = document.documentElement.getAttribute("data-theme");
      document.documentElement.setAttribute("data-theme", currentTheme === "light" ? "dark" : "light");
    }

    function goBack() {
      window.history.back();
    }

    function logout() {
      window.location.href = "logout.php";
    }
  </script>
</body>
</html>
