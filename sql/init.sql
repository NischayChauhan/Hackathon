-- CREATE DATABASE hackathon;

use hackathon;

CREATE TABLE Users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	fullName VARCHAR(30) NOT NULL,
	password VARCHAR(50) NOT NULL,
	phone VARCHAR(50) NOT NULL,
	blood_group VARCHAR(50) NOT NULL,
	address VARCHAR(50) NOT NULL,
	eMail VARCHAR(50) NOT NULL,
	date TIMESTAMP
);

