<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center - 2025 Calendar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: white;
            text-align: center;
            margin: 0;
            padding: 200px;
            position: relative;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.9);
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            z-index: 1000;
            padding: 15px 0;
        }

        .navbar-brand {
            font-size: 30px;
            font-weight: bold;
            color: white;
            margin-left: 20px;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            color: white !important;
            font-weight: 600;
            transition: 0.3s;
            padding: 10px;
        }

        .navbar-nav .nav-link:hover {
            color: #fac031 !important;
        }

        .navbar-nav .nav-link::after {
            content: '';
            width: 0%;
            height: 2px;
            background: #fac031;
            display: block;
            transition: 0.2s linear;
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        .navbar-nav .nav-link.active {
            color: #fac031 !important;
            font-weight: bold;
        }

        .login-btn {
            margin-left: auto;
            margin-right: 20px;
        }

        .login-btn a {
            background:rgb(88, 237, 65);
            color: black !important;
            font-weight: bold;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .login-btn a:hover {
            background: white;
            color:rgb(163, 142, 215) !important;
        }

        @media (max-width: 992px) {
            .navbar {
                padding: 10px 0;
            }
            
            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-item {
                margin: 5px 0;
            }

            .login-btn {
                margin-top: 10px;
                text-align: center;
            }
        }

        .calendar-container {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 100px;
            max-width: 1800px;
            margin: auto;
        }

        .month {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 10px;
            background: #f9f9f9;
        }

        .month h2 {
            background: rgb(26, 164, 72);
            padding: 10px;
            border-radius: 5px;
            color: white;
        }

        .days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            padding: 5px;
        }

        .day {
            padding: 10px;
            border: 1px solid #ccc;
            min-height: 40px;
            position: relative;
        }

        .weekday {
            background: #ddd;
        }

        .holiday {
            background-color: red;
            color: white;
            font-weight: bold;
        }

        .day span {
            font-size: 10px;
            color: gray;
            position: absolute;
            bottom: 10px;
        }

        .first-day-mark {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 8px;
            height: 8px;
            background-color:rgb(50, 18, 139);
            border-radius: 50%;
        }

        .gym-visit {
            background-color: #87ceeb;
            color: white;
            font-weight: bold;
        }

        .mark-visit-btn {
            margin-top: 5px;
            font-size: 12px;
            background-color:rgb(194, 201, 201);
            color: black;
            border: none;
            padding: 5px;
            border-radius: 5px;
            cursor: pointer;
        }

        .mark-visit-btn:hover {
            background-color:rgb(204, 28, 28);
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
                <li class="nav-item"><a class="nav-link" href="custamer.php">View Gym Overview/</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Check Class Schedules/</a></li>
                <li class="nav-item"><a class="nav-link" href="location.php">Book Personal Training Sessions/</a></li>
                <li class="nav-item"><a class="nav-link" href="membership.php">Membership Plans/</a></li>
                <li class="nav-item"><a class="nav-link" href="shop.php">Shop/</a></li>
                <li class="nav-item"><a class="nav-link" href="custamer_home1.php">Coach Service</a></li>
            </ul>
            <div class="login-btn">
                <a href="../frontend/custamer.php">custamer home</a>
            </div>
        </div>
    </div>
</nav>

<h1>2025 Calendar - Sri Lanka FitZone Fitness Center</h1>
<div class="calendar-container" id="calendar"></div>

<script>
    const holidays = ["2025-01-15", "2025-02-04", "2025-04-13", "2025-04-14", "2025-05-01", "2025-06-20", "2025-07-12", "2025-09-29", "2025-12-25"];
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const weekDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const gymVisits = new Set();

    function generateCalendar(year) {
        const calendarContainer = document.getElementById("calendar");
        calendarContainer.innerHTML = "";
        
        for (let month = 0; month < 12; month++) {
            const monthDiv = document.createElement("div");
            monthDiv.classList.add("month");
            monthDiv.innerHTML = `<h2>${monthNames[month]}</h2>`;
            
            const daysDiv = document.createElement("div");
            daysDiv.classList.add("days");
            
            weekDays.forEach(day => {
                const dayHeader = document.createElement("div");
                dayHeader.classList.add("weekday");
                dayHeader.textContent = day;
                daysDiv.appendChild(dayHeader);
            });
            
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            
            for (let i = 0; i < firstDay; i++) {
                const emptyCell = document.createElement("div");
                emptyCell.classList.add("day");
                daysDiv.appendChild(emptyCell);
            }
            
            for (let day = 1; day <= daysInMonth; day++) {
                const cell = document.createElement("div");
                cell.classList.add("day");
                const dateStr = `${year}-${(month + 1).toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
                cell.innerHTML = `${day} <span>Open: 5 AM - 10 PM</span>`;
                
                if (holidays.includes(dateStr)) {
                    cell.classList.add("holiday");
                }
                
                const visitButton = document.createElement("button");
                visitButton.classList.add("mark-visit-btn");
                visitButton.textContent = "Mark Visit";
                visitButton.onclick = () => markVisit(dateStr, cell);

                cell.appendChild(visitButton);
                
            
                if (day === 1) {
                    const mark = document.createElement("div");
                    mark.classList.add("first-day-mark");
                    cell.appendChild(mark);
                }

                daysDiv.appendChild(cell);
            }
            
            monthDiv.appendChild(daysDiv);
            calendarContainer.appendChild(monthDiv);
        }
    }

    function markVisit(dateStr, cell) {
        gymVisits.add(dateStr);
        cell.classList.add("gym-visit");
    }

    generateCalendar(2025);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
