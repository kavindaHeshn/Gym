<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Appointment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    /* Global styles */
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f7fa;
      margin: 0;
      padding-top: 90px;
      color: #333;
    }

    /* Navbar */
    .navbar-custom {
      position: fixed;
      top: 0;
      width: 100%;
      background-color: #1d4672;
      height: 90px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 30px;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .navbar-custom .navbar-brand {
      font-size: 24px;
      font-weight: bold;
      color: #fff;
      letter-spacing: 1px;
    }

    .navbar-custom .btn-back {
      background-color: transparent;
      border: 1px solid #ffffff;
      color: #ffffff;
      padding: 8px 14px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .navbar-custom .btn-back:hover {
      background-color: #ffffff;
      color: #1d4672;
    }

    /* Form Container */
    .appointment-form {
      background-color: #ffffff;
      padding: 40px;
      max-width: 440px;
      margin: 50px auto;
      border-radius: 12px;
      box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
    }

    .appointment-form h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #1d4672;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 8px;
      color: #333;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccd1d9;
      border-radius: 8px;
      font-size: 16px;
      transition: 0.3s;
    }

    .form-group input:focus {
      border-color: #2980b9;
      box-shadow: 0 0 5px rgba(41, 128, 185, 0.4);
      outline: none;
    }

    .btn-submit {
      width: 100%;
      padding: 14px;
      background-color: #2980b9;
      border: none;
      color: white;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #1c5980;
    }

    @media (max-width: 480px) {
      .appointment-form {
        padding: 25px;
      }

      .navbar-custom {
        flex-direction: column;
        height: auto;
        padding: 10px 20px;
        align-items: flex-start;
      }

      .navbar-custom .btn-back {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar-custom">
    <div class="navbar-brand">Book Appointment</div>
    <a href="1.php" class="btn-back">Back to Dashboard</a>
  </nav>

  <!-- Appointment Form -->
  <form action="book_appointment.php" method="POST" class="appointment-form">
    <h2>Book an Appointment</h2>

    <div class="form-group">
      <label for="customer_id">Customer ID</label>
      <input type="number" id="customer_id" name="customer_id" required>
    </div>

    <div class="form-group">
      <label for="appointment_date">Appointment Date</label>
      <input type="date" id="appointment_date" name="appointment_date" required>
    </div>

    <div class="form-group">
      <label for="appointment_time">Appointment Time</label>
      <input type="time" id="appointment_time" name="appointment_time" required>
    </div>

    <button type="submit" class="btn-submit">Book Appointment</button>
  </form>

</body>
</html>
