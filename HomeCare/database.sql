CREATE DATABASE IF NOT EXISTS homecare_db;
USE homecare_db;

CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100),
    address TEXT NOT NULL,
    service_type VARCHAR(50) NOT NULL,
    preferred_date DATE NOT NULL,
    preferred_time VARCHAR(20),
    message TEXT,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(20) DEFAULT 'pending'
);