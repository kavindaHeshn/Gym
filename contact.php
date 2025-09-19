<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FitZone Weekly Gym Schedule</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      background: linear-gradient(to right, #0f0c29, #302b63, #24243e);
      color: #f0f0f0;
      padding: 40px;
    }
    h1 {
      color: #39FF14;
      text-align: center;
      font-size: 48px;
      margin-bottom: 40px;
      text-transform: uppercase;
    }
    .schedule {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: auto;
    }
    .card {
      background-color: rgba(255, 255, 255, 0.05);
      padding: 25px;
      border-radius: 16px;
      box-shadow: 0 0 25px rgba(57, 255, 20, 0.6);
      transition: transform 0.3s ease;
      backdrop-filter: blur(5px);
    }
    .card:hover {
      transform: translateY(-10px);
    }
    .card h2 {
      color: #00FFFF;
      margin-bottom: 10px;
      font-size: 24px;
    }
    .card p {
      font-size: 15px;
      line-height: 1.6;
    }
    .btn {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 18px;
      background-color: #39FF14;
      color: #000;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
      text-transform: uppercase;
    }
    .btn:hover {
      background-color: #00e600;
    }
  </style>
</head>
<body>

  <h1>Weekly Workout Schedule</h1>

  <div class="schedule" id="schedule-container">
    <!-- Cards will load here from PHP -->
  </div>

  <script>
    fetch('get_schedule.php')
      .then(response => response.json())
      .then(data => {
        const container = document.getElementById('schedule-container');
        data.forEach(item => {
          const card = document.createElement('div');
          card.className = 'card';
          card.innerHTML = `
            <h2>${item.day}</h2>
            <p>${item.description}</p>
            <button class="btn">Join Now</button>
          `;
          container.appendChild(card);
        });
      })
      .catch(error => {
        console.error('Error loading schedule:', error);
        document.getElementById('schedule-container').innerHTML = '<p>Failed to load schedule.</p>';
      });
  </script>

</body>
</html>
