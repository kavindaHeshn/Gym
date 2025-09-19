<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Staff Dashboard</title>
  <style>
    body {
      display: flex;
      height: 100vh;
      overflow: hidden;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .sidebar {
      width: 300px;
      background-color: #1f2d3d;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .sidebar h3 {
      margin-bottom: 40px;
      font-size: 28px;
      color: #fff;
      border-bottom: 2px solid #3a4f63;
      padding-bottom: 10px;
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      padding: 12px 20px;
      border-radius: 6px;
      margin-bottom: 10px;
      background-color: #2d3e50;
      transition: 0.3s;
    }

    .sidebar a:hover {
      background-color: #3f5871;
    }

    .content {
      flex-grow: 1;
      padding: 30px;
      background-color: #ecf0f3;
      overflow-y: auto;
    }

    .staff-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .staff-member {
      width: 250px;
      text-align: center;
      background: white;
      padding: 15px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .staff-member img {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .search-box {
      margin: 30px auto 10px;
      max-width: 400px;
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .search-box input {
      padding: 10px 15px;
      width: 100%;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .staff-member.hidden {
      display: none;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <div class="menu">
      <h3>Staff Dashboard</h3>
      <a href="../admin_panel/manage_users.php">Manage Users</a>
      <a href="../admin_panel/manage_classes.php">Manage Classes</a>
      <a href="../admin_panel/manage_queries.php">Manage Queries</a>
      <a href="1.php">Staff Dashboard</a>
    </div>
    <a href="../authentication/logout.php" style="background-color: #e74c3c;">Logout</a>
  </div>

  <div class="content">
    <h2 style="text-align:center; color:#2c3e50;">Welcome, Staff</h2>
    <p style="text-align:center; color:#555;">Manage all aspects of the gym efficiently.</p>

    <div class="search-box">
      <input type="text" id="searchInput" placeholder="Search staff by name or role..." onkeyup="filterStaff()">
    </div>

    <div class="staff-container" id="staffList">
      <!-- Staff Cards -->
      <div class="staff-member">
        <img src="../images/s1.jpg" alt="Nilusha">
        <h5>Nilusha</h5><p>Trainer</p>
      </div>
      <div class="staff-member">
        <img src="../images/s6.jpg" alt="Gishan">
        <h5>Gishan</h5><p>Receptionist</p>
      </div>
      <div class="staff-member">
        <img src="../images/s2.jpg" alt="Tharindu">
        <h5>Tharindu</h5><p>Gym Manager</p>
      </div>
      <div class="staff-member">
        <img src="../images/s3.jpg" alt="Mindula">
        <h5>Mindula</h5><p>Nutritionist</p>
      </div>
      <div class="staff-member">
        <img src="../images/s4.jpg" alt="Samantha">
        <h5>Samantha</h5><p>Yoga Instructor</p>
      </div>
      <div class="staff-member">
        <img src="../images/s5.jpg" alt="Daniel">
        <h5>Daniel</h5><p>Personal Trainer</p>
      </div>
      <div class="staff-member">
        <img src="../images/7.jpg" alt="Lara">
        <h5>Lara</h5><p>Receptionist</p>
      </div>
      <div class="staff-member">
        <img src="../images/8.jpg" alt="Tom">
        <h5>Tom</h5><p>Gym Maintenance</p>
      </div>
      <div class="staff-member">
        <img src="../images/9.jpg" alt="Oliver">
        <h5>Oliver</h5><p>Marketing</p>
      </div>
      <div class="staff-member">
        <img src="../images/10.jpg" alt="Meera">
        <h5>Meera</h5><p>Accountant</p>
      </div>
    </div>
  </div>

  <script>
    function filterStaff() {
      const input = document.getElementById("searchInput").value.toLowerCase();
      const staffMembers = document.querySelectorAll(".staff-member");

      staffMembers.forEach(member => {
        const name = member.querySelector("h5").innerText.toLowerCase();
        const role = member.querySelector("p").innerText.toLowerCase();

        if (name.includes(input) || role.includes(input)) {
          member.classList.remove("hidden");
        } else {
          member.classList.add("hidden");
        }
      });
    }
  </script>

</body>
</html>
