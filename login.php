<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gym Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, #ffdee9 0%, #b5fffc 100%);
      transition: background 0.4s ease, color 0.4s ease;
      background-attachment: fixed;
      position: relative;
    }

    body.dark-mode {
      background: linear-gradient(135deg, #1a1a2e, #16213e);
      color: #f0f0f0;
    }

    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: -1;
    }

    .navbar {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      padding: 20px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(255, 255, 255, 0.1);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      z-index: 99;
    }

    .navbar .logo {
      font-size: 28px;
      font-weight: 700;
      color: #fff;
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    .navbar a {
      color: #fff;
      text-decoration: none;
      font-size: 16px;
      transition: 0.3s ease;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    .dark-toggle {
      background: #fff;
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 14px;
      border: none;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.1);
      padding: 60px;
      border-radius: 25px;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      border: 1px solid rgba(255, 255, 255, 0.2);
      text-align: center;
      backdrop-filter: blur(15px);
      width: 90%;
      max-width: 500px;
      margin-top: 100px;
    }

    h2 {
      color: #fff;
      margin-bottom: 20px;
      font-size: 28px;
    }

    .error {
      color: #fff;
      background: #ff4d4d;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      color: #fff;
      text-align: left;
      margin-top: 10px;
      font-weight: 600;
    }

    input {
      padding: 12px;
      margin: 10px 0;
      border: 2px solid rgba(255, 255, 255, 0.5);
      border-radius: 8px;
      outline: none;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      font-size: 16px;
    }

    input::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    button {
      padding: 12px;
      margin-top: 20px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(90deg, #ff9a9e 0%, #fad0c4 100%);
      color: white;
      font-size: 18px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background: linear-gradient(90deg, #f6d365 0%, #fda085 100%);
    }

    p {
      color: #fff;
      margin-top: 15px;
    }

    a {
      color: #ffd9ec;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<!-- 🧭 Navigation Bar -->
<div class="navbar">
  <div class="logo">FitZone Fitness Center</div>
  <div style="display: flex; gap: 20px; align-items: center;">
    <a href="../index.html">Home</a>
    <button class="dark-toggle" onclick="toggleDarkMode()">Dark / Light</button>
  </div>
</div>

<!-- 🔐 Login Form -->
<div class="login-container">
  <h2>Login</h2>
  <?php if (isset($_GET['error'])) { ?>
    <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
  <?php } ?>
  <form action="../authentication/login.php" method="POST">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter Email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter Password" required>

    <button type="submit">Login</button>
  </form>
  <p>Don't have an account? <a href="signup.php">Signup</a></p>
</div>

<!-- 🌗 Dark Mode Script -->
<script>
  function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
  }
</script>

</body>
</html>
