CREATE DATABASE IF NOT EXISTS website_db;

USE website_db;

CREATE TABLE IF NOT EXISTS sinhvien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hoten VARCHAR(100),
    email VARCHAR(100)
);

INSERT INTO sinhvien (hoten, email)
VALUES
('Tran Van A', 'a@gmail.com'),
('Tran Van B', 'b@gmail.com');
