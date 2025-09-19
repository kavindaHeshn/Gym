<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitZone Fitness Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Top Bar */
        .top-bar {
            background-color: #000;
            color: #fff;
            padding: 10px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: Arial, sans-serif;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .social-icons i {
            margin-left: 15px;
            font-size: 18px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .social-icons i:hover {
            color: #fac031;
        }

        /* Navbar */
        .navbar-custom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            background-color: #070707;
            position: fixed;
            top: 40px;
            width: 100%;
            z-index: 999;
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 2px;
            color: white;
        }

        .logo span {
            color: #fac031;
        }

        .navbar-custom ul {
            list-style: none;
            display: flex;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        .navbar-custom ul li a {
            text-decoration: none;
            color: white;
            font-weight: 600;
            position: relative;
        }

        .navbar-custom ul li.active a::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #8a63f7;
        }

        .whatsapp-btn {
            background-color: #8a63f7;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .whatsapp-btn:hover {
            background-color: #a288f0;
        }

        @media (max-width: 768px) {
            .top-bar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-custom {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px;
                top: 60px;
            }

            .navbar-custom ul {
                flex-direction: column;
                gap: 10px;
                margin-top: 10px;
            }

            .whatsapp-btn {
                margin-top: 10px;
            }
        }

        /* Body Styles */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding-top: 150px;
            background: rgb(3, 2, 2);
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("../images/1.jpg") no-repeat center center fixed;
            background-size: cover;
            filter: blur(10px);
            z-index: -1;
        }

        h1 {
            font-family: 'Arial Black', sans-serif;
            font-size: 175px;
            color: white;
            margin-top: 50px;
        }

        h2, h3 {
            font-family: 'Arial Black', sans-serif;
            text-align: left;
            color: rgb(35, 35, 35);
            margin-top: 50px;
        }

        h2 {
            font-size: 75px;
        }

        h3 {
        
    font-family: 'Arial Black', sans-serif;
    text-align: left;
    color: rgb(22, 21, 21);
    margin-top: 50px;
    font-size: 35px; /* Increase this value as needed */
    font-weight: bold;
}

        

        h4, h5 {
            font-family: 'Rockwell Condensed', sans-serif;
            text-align: center;
            font-size: 100px;
            color: hsl(0, 11.10%, 10.60%);
            margin-top: 80px;
            font-weight: bold;
        }

        h6 {
    font-family: 'Arial Black', sans-serif;
    text-align: left;
    color: rgb(213, 204, 204);
    margin-top: 50px;
    font-size: 40px; /* Increase this value as needed */
    font-weight: bold;
}

        .content, .content2 {
            text-align: left;
            font-size: 24px;
            max-width: 80%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            min-height: 400px;
        }

        .content {
            color: rgb(20, 19, 19);
            background: rgba(243, 240, 240, 0.5);
        }

        .content1 {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        .left-side {
            flex: 1;
            background: url('../images/1566.png') no-repeat center center;
            background-size: cover;
        }

        .right-side {
            flex: 1;
            background-color: rgba(183, 243, 169, 0.73);
            color: white;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right-side h4 {
            font-size: 56px;
            margin-bottom: 50px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .right-side p {
            font-size: 18px;
            line-height: 1.8;
        }

        @media screen and (max-width: 768px) {
            .content1 {
                flex-direction: column;
            }

            .left-side, .right-side {
                flex: none;
                width: 100%;
                height: 50vh;
            }

            .right-side {
                padding: 20px;
            }
        }

        .content2 {
            color: rgb(241, 238, 238);
            font-size: 34px;
            background: rgb(236, 229, 229);
        }

        video {
            width: 100%;
            max-height: 700px;
            margin-top: 20px;
            border-radius: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        hr {
            border: 5px solid #ffffff;
            width: 80%;
            margin: 100px auto;
        }

        .spacer {
            height: 100px;
        }

        table {
            margin: 0 auto;
        }

        table img {
            margin: 10px;
        }


        <!-- Add this CSS section or modify your existing .gallery img section -->
<style>
    /* Gallery Styling */
    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
        padding: 20px;
    }
    .gallery img {
        width: 450px;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }
    .gallery img:hover {
        transform: scale(1.05);
    }

    
</style>

    </style>
</head>
<body>

<!-- Top Bar & Navigation -->
<div class="top-bar">
    <div>Limited Slots Only</div>
    <div class="social-icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-whatsapp"></i>
        <i class="fab fa-tiktok"></i>
    </div>
</div>

<nav class="navbar-custom">
    <div class="logo">FitZone Fitness Center <span>⚡</span></div>
    <ul>
        <li><a href="about.php">About</a></li>
        <li><a href="staff.html">Gym Staff</a></li>
        <li><a href="coach.php">Coach Service</a></li>
        <li><a href="location.php">Contact</a></li>
        <li><a href=" ">Customer Feedback</a></li>
    </ul>
    <a href="../frontend/login.php" class="whatsapp-btn">Login</a>
</nav>

<!-- Main Content -->
<h1>FitZone Fitness Center</h1>
<h6>
    * Are you ready to shape your body?<br>
    * Join us today!
</h6>

<hr>

<video controls autoplay muted>
    <source src="../images/0331.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<hr>

<div class="content1">
    <div class="left-side"></div>
    <div class="right-side">
        <h4>ABOUT FITZONE FITNESS CENTER</h4>
        <p>
          <h3>  FitZone Fitness Center pioneered the Sri Lankan gym industry in 1994 and has remained the
            largest chain of fitness centres since its inception. We serve over 25,000 members in Colombo and its suburbs.<br><br>
            Our vision is to bring fitness to everyone. Whether you are a beginner or a pro, our certified trainers will create a personalized fitness plan just for you.
    </h3></p>
    </div>
</div>

<hr>

<h3>When we come together, what are the physical and mental benefits for all of you?</h3>
<div class="content">
    <p>
        <strong>Physical Benefits</strong><br><br>
        💪 Muscle Growth & Strength<br>
        🔥 Fat Loss<br>
        ❤ Improved Heart Health<br>
        🦴 Stronger Bones & Joints<br>
        ⚡ Boosts Energy Levels<br><br>

        <strong>Mental Benefits</strong><br><br>
        🧠 Reduces Stress & Anxiety<br>
        😴 Better Sleep Quality<br>
        🚀 Boosts Confidence<br>
        🧘 Increases Focus & Discipline<br>
    </p>
</div>

<hr>
<div class="content">
    <h4>IMAGE GALLERY</h4>
</div>
<br>

<div class="section-margin">
    <div class="gallery">
        <img src="../images/facilities1.jpg" alt="Gym Image 1" />
        <img src="../images/facilities2.jpg" alt="Gym Image 2" />
        <img src="../images/facilities3.webp" alt="Gym Image 3" />
        <img src="../images/facilities4.jpg" alt="Gym Image 4" /><br>
        <img src="../images/facilities5.jpg" alt="Gym Image 5" />
        <img src="../images/facilities6.jpg" alt="Gym Image 6" />
    </div>
</div>


  
<hr>

<div class="content">
    <h4>SUCCESS STORIES</h4>
</div>
<br>

<div class="section-margin">
    <div class="gallery">
        <img src="../images/succe1.jpg" alt="Success Image 1" />
        <img src="../images/succe2.jpg" alt="Success Image 2" />
        <img src="../images/suce3.jpg" alt="Success Image 3" /><br>
        <img src="../images/succ2.jpg" alt="Success Image 4" />
        <img src="../images/succc1.jpg" alt="Success Image 5" />
    </div>
</div>


<!-- Chatbot -->
<div id="chatbot-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
    <button onclick="toggleChatbot()" style="background-color: #8a63f7; color: white; border: none; padding: 10px 20px; border-radius: 50px; font-size: 16px; cursor: pointer;">
        Chat with us 💬
    </button>
    <div id="chatbot-box" style="display: none; width: 300px; height: 400px; background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.3); overflow: hidden; margin-top: 10px;">
        <div id="chat-content" style="height: 320px; padding: 10px; overflow-y: auto; font-family: Arial, sans-serif; font-size: 14px;"></div>
        <div style="display: flex; border-top: 1px solid #ccc;">
            <inpu      t id="user-input" type="text" placeholder="Type your message..." onkeypress="if(event.key === 'Enter') sendMessage()" style="flex: 1; padding: 10px; border: none; outline: none;">
            <button onclick="sendMessage()" style="background-color: #8a63f7; color: white; border: none; padding: 10px 15px; cursor: pointer;">Send</button>
        </div>
    </div>
</div>

<div class="spacer"></div>

<script>
    function toggleChatbot() {
        var box = document.getElementById("chatbot-box");
        box.style.display = box.style.display === "none" ? "block" : "none";
    }

    function sendMessage() {
        var input = document.getElementById("user-input");
        var content = document.getElementById("chat-content");
        var message = input.value.trim();

        if (message === "") return;

        content.innerHTML += "<div><strong>You:</strong> " + message + "</div>";

        let response = "";
        const msg = message.toLowerCase();

        if (msg.includes("hello") || msg.includes("hi")) {
            response = "Hi there! Welcome to FitZone 💪 How can I help you today?";
        } else if (msg.includes("membership")) {
            response = "We offer monthly, quarterly, and annual memberships! 🏋️‍♂️ Would you like more info?";
        } else if (msg.includes("trainer")) {
            response = "Our certified trainers are here to support your fitness journey! 👨‍🏫";
        } else if (msg.includes("location")) {
            response = "We have 24 fitness centers around Colombo and suburbs. 🗺️";
        } else {
            response = "I'm here to help with anything related to FitZone! 😊";
        }

        setTimeout(() => {
            content.innerHTML += "<div><strong>Bot:</strong> " + response + "</div>";
            content.scrollTop = content.scrollHeight;
        }, 500);

        input.value = "";
    }
</script>

</body>
</html>

*/<--background image-->/*