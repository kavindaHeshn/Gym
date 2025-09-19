oo
-- Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    address TEXT NOT NULL,
    job_category VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    message TEXT NOT NULL,
    gender ENUM('M', 'F') NOT NULL,
    city VARCHAR(50) NOT NULL,
    package ENUM('online_coaching', 'solo', 'couple_training', 'personal_training') NOT NULL,
    gym_coach VARCHAR(100) NOT NULL,  -- Changed ENUM to VARCHAR for flexibility
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    role ENUM('customer', 'staff', 'admin') DEFAULT 'customer'
);

-- Classes Table
CREATE TABLE classes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    trainer VARCHAR(255) NOT NULL,
    schedule DATETIME, -- Changed from VARCHAR to DATETIME
    price DECIMAL(10,2) NOT NULL,
    bpm INT DEFAULT NULL, -- Allows NULL if not applicable
    description TEXT
);

-- Bookings Table
CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    class_id INT NOT NULL,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (class_id) REFERENCES classes(id) ON DELETE CASCADE
);


CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    user_id INT,
    class_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (class_id) REFERENCES classes(id) ON DELETE CASCADE
);



CREATE TABLE customer_queries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100),
    question TEXT NOT NULL,
    answer TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE nutrition_plans (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_name VARCHAR(100),
  day VARCHAR(20),
  breakfast TEXT,
  lunch TEXT,
  snacks TEXT,
  dinner TEXT,
  protein INT,
  carbs INT
);

--CREATE TABLE gym_schedule 
(
  id INT AUTO_INCREMENT PRIMARY KEY,
  day VARCHAR(20),
  workout VARCHAR(255),
  description TEXT
);
INSERT INTO gym_schedule (day, description) VALUES
('Monday', '🏋️ Chest & Triceps<br>🔥 Focus: Power & Push Movements'),
('Tuesday', '💪 Biceps & Back<br>🔥 Focus: Pull & Isolation Training'),
('Wednesday', '🧘 Core & Mobility<br>🔥 Focus: Flexibility & Strength Balance'),
('Thursday', '🦵 Leg Day<br>🔥 Focus: Strength, Squats, and Lunges'),
('Friday', '🏃 HIIT & Conditioning<br>🔥 Focus: Fat Burn & Endurance');
-- CREATE TABLE workout_plans (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   workout_day VARCHAR(100)
-- );

CREATE TABLE membership (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  plan VARCHAR(50) NOT NULL,
  trainer VARCHAR(50),
  notes TEXT,
  payment_method VARCHAR(50) NOT NULL,
  bank_name VARCHAR(255),
  account_number VARCHAR(50),
  account_holder_name VARCHAR(255),
  otp_code VARCHAR(50),
  submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE workout_routine (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day VARCHAR(20) NOT NULL,
    exercise VARCHAR(100) NOT NULL,
    sets VARCHAR(10),
    reps VARCHAR(20),
    rest VARCHAR(20)
);
