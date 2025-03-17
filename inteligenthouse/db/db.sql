CREATE DATABASE house;

USE house;

CREATE TABLE sala(
    id INT AUTO_INCREMENT PRIMARY KEY,
    sensor_id VARCHAR(50) NOT NULL, 
    sensor_type ENUM('Infrarrojo', 'Temperatura', 'OLED', 'Fotorresistencia') NOT NULL,
    value FLOAT NOT NULL,  
    unit VARCHAR(20),  
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);