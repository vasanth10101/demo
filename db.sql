CREATE DATABASE idor_demo;

USE idor_demo;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(15)
);

INSERT INTO users (username, email, phone)
VALUES
('alice', 'alice@example.com', '123-456-7890'),
('bob', 'bob@example.com', '098-765-4321');

