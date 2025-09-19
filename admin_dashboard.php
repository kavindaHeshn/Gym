<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  <style>
    :root {
      --bg-color: #f0f2f5;
      --text-color: #1d1f27;
      --card-bg: #e9ecef;
      --sidebar-bg: #1d1f27;
      --primary-color: #0d6efd;
      --video-border: #0d6efd;
      --logout-bg: #dc3545;
    }

    body.dark-mode {
      --bg-color: #121212;
      --text-color: #f1f1f1;
      --card-bg: #1e1e1e;
      --sidebar-bg: #181818;
      --primary-color: #4dabf7;
      --video-border: #4dabf7;
      --logout-bg: #ff6b6b;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      height: 100vh;
      background-color: var(--bg-color);
      color: var(--text-color);
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .sidebar {
      width: 250px;
      background-color: var(--sidebar-bg);
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 30px 20px;
    }

    .sidebar h3 {
      color: var(--primary-color);
      margin-bottom: 30px;
      text-align: center;
    }

    .sidebar a {
      display: block;
      text-decoration: none;
      color: #f1f1f1;
      background-color: transparent;
      padding: 12px 15px;
      border-radius: 8px;
      margin-bottom: 10px;
      font-weight: 500;
      transition: 0.3s;
      border: 1px solid transparent;
    }

    .sidebar a:hover {
      background-color: var(--primary-color);
      color: white;
      border-color: var(--primary-color);
    }

    .logout-btn {
      margin-top: 20px;
      background-color: var(--logout-bg);
      text-align: center;
      font-weight: bold;
    }

    .logout-btn:hover {
      opacity: 0.9;
    }

    .toggle-mode {
      margin-top: 10px;
      background-color: transparent;
      color: #f1f1f1;
      text-align: center;
      border: 1px solid #aaa;
      border-radius: 6px;
      padding: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .toggle-mode:hover {
      background-color: var(--primary-color);
      color: white;
    }

    .content {
      flex-grow: 1;
      padding: 40px;
      background-color: var(--card-bg);
      overflow-y: auto;
      text-align: center;
    }

    .content h1 {
      font-size: 3rem;
      color: var(--primary-color);
      margin-bottom: 10px;
    }

    .content h2 {
      font-size: 1.5rem;
      color: var(--text-color);
      margin-bottom: 40px;
    }

    .video-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .video-container video {
      max-width: 320px;
      border-radius: 12px;
      border: 3px solid var(--video-border);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .video-container video:hover {
      transform: scale(1.03);
    }

    @media screen and (max-width: 768px) {
      body {
        flex-direction: column;
      }
      .sidebar {
        width: 100%;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
      }
      .sidebar h3 {
        flex-basis: 100%;
      }
      .content {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <div>
      <h3>Admin Dashboard</h3>
      <a href="../admin_panel/user_list.php">👥 Manage Users</a>
      <a href="../admin_panel/manage_classes.php">📅 Manage Classes</a>
      <a href="../admin_panel/manage_queries.php">💬 Feedback</a>
      <a href="../admin_panel/manage_users.php">🔄 Update User</a>
     
    </div>
    <div>
      <button class="toggle-mode" onclick="toggleDarkMode()">🌙 Toggle Dark Mode</button>
      <a href="../authentication/logout.php" class="logout-btn">🚪 Logout</a>
    </div>
  </div>

  <div class="content">
    <h1>Welcome, Admin</h1>
    <h2>Manage all aspects of the gym efficiently.</h2>

    <div class="video-container">
      <video autoplay loop muted>
        <source src="../images/02.mp4" type="video/mp4">
      </video>

      <video autoplay loop muted>
        <source src="../images/05.mp4" type="video/mp4">
      </video>

      <video autoplay loop muted>
        <source src="../images/youtube_5KnzYYHfB_8_720x1280_h264.mp4" type="video/mp4">
      </video>

      <video autoplay loop muted>
        <source src="../images/6.mp4" type="video/mp4">
      </video>
    </div>
  </div>

  <script>
    function toggleDarkMode() {
      document.body.classList.toggle("dark-mode");
    }
  </script>
</body>
</html>
