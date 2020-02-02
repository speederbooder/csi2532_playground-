CREATE TABLE athletes (
	id int PRIMARY KEY,
	name varchar(50),
	gender varchar(6),
	dob date
);

CREATE TABLE competition (
	nom varchar(50),
	lieu varchar(50),
	date date,
	PRIMARY KEY (nom)
);
