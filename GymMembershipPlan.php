<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FitZone | Sell Membership</title>
  <style>
    :root {
      --primary-color: #ff3e3e;
      --secondary-color: #00d1b2;
      --dark-bg: #101820;
      --light-bg: #1c1c2e;
      --text-light: #f8f8f8;
      --input-bg: #ebebeb;
      --hover-color: #cc0000;
      --shadow: rgba(0, 0, 0, 0.6);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: var(--text-light);
    }

    nav {
      background: var(--light-bg);
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 12px var(--shadow);
    }

    nav .logo {
      font-size: 1.8em;
      font-weight: bold;
      color: var(--primary-color);
      text-shadow: 1px 1px 2px #000;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav ul li a {
      color: var(--text-light);
      text-decoration: none;
      font-size: 1em;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: var(--primary-color);
    }

    .container {
      max-width: 750px;
      margin: 60px auto;
      background: var(--light-bg);
      border-radius: 18px;
      padding: 40px;
      box-shadow: 0 10px 40px var(--shadow);
    }

    h2 {
      text-align: center;
      color: var(--primary-color);
      margin-bottom: 30px;
      font-size: 26px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
    }

    input, select, textarea {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: none;
      margin-bottom: 20px;
      background-color: var(--input-bg);
      color: #000;
      font-size: 15px;
    }

    textarea {
      resize: vertical;
    }

    button {
      background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
      color: white;
      padding: 14px;
      font-size: 16px;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: all 0.3s ease;
      width: 100%;
      box-shadow: 0 5px 15px rgba(255, 62, 62, 0.3);
    }

    button:hover {
      background: linear-gradient(to right, #ff1a1a, #00a991);
      box-shadow: 0 8px 20px rgba(255, 99, 99, 0.5);
    }

    #bankDetails {
      display: none;
    }

    .dashboard-link {
      text-align: center;
      margin-top: 25px;
    }

    .dashboard-link a {
      color: #aaa;
      text-decoration: underline;
    }

    .dashboard-link a:hover {
      color: var(--primary-color);
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav>
    <div class="logo">FitZone</div>
    <ul>
 
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </nav>

  <!-- Membership Form -->
  <div class="container">
    <h2>Sell a Gym Membership</h2>
    <form id="membershipForm" action="save_membership.php" method="POST">
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required>

      <label for="plan">Membership Plan</label>
      <select id="plan" name="plan" required>
        <option value="">-- Select Plan --</option>
        <option value="monthly">Monthly - Rs.3000</option>
        <option value="3months">3 Months - Rs.8000</option>
        <option value="6months">6 Months - Rs.15000</option>
        <option value="yearly">Yearly - Rs.28000</option>
      </select>

      <label for="trainer">Need Personal Trainer?</label>
      <select id="trainer" name="trainer">
        <option value="no">No</option>
        <option value="yes">Yes (+Rs.2000/month)</option>
      </select>

      <label for="notes">Special Notes</label>
      <textarea id="notes" name="notes" rows="3"></textarea>

      <label for="paymentMethod">Payment Method</label>
      <select id="paymentMethod" name="paymentMethod" required>
        <option value="">-- Select Method --</option>
        <option value="bank-transfer">Bank Transfer</option>
        <option value="cash">Cash</option>
      </select>

      <div id="bankDetails">
        <label for="bankName">Select Bank</label>
        <select id="bankName" name="bankName">
          <option value="">-- Choose a Bank --</option>
          <option value="DFCC">DFCC Bank PLC</option>
          <option value="BOC">Bank of Ceylon</option>
          <option value="Sampath">Sampath Bank</option>
          <option value="HNB">Hatton National Bank</option>
          <option value="People">People's Bank</option>
        </select>

        <label for="accountNumber">Account Number</label>
        <input type="text" id="accountNumber" name="accountNumber">

        <label for="accountHolder">Account Holder Name</label>
        <input type="text" id="accountHolder" name="accountHolder">

        <label for="otpCode">OTP Code</label>
        <input type="text" id="otpCode" name="otpCode">
      </div>

      <button type="submit">Submit Membership</button>
    </form>

    <div class="dashboard-link">
      <a href="../staff_dashboard/1.php">← Back to Staff Dashboard</a>
    </div>
  </div>

  <!-- JavaScript for Dynamic Fields -->
  <script>
    const paymentMethod = document.getElementById("paymentMethod");
    const bankDetails = document.getElementById("bankDetails");

    paymentMethod.addEventListener("change", () => {
      bankDetails.style.display = paymentMethod.value === "bank-transfer" ? "block" : "none";
    });
  </script>
</body>
</html>
