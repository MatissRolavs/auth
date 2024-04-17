CREATE DATABASE auth_rolavs;
USE auth_rolavs;

CREATE TABLE users(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL
);

INSERT INTO users 
(email, password)
VALUES
("beate@ckc.lv", "Parole123");