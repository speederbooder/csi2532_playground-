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

CREATE TABLE leaderboard (
	athletes int,
	competition varchar(50),
	date date,
	migration date,
	PRIMARY KEY (athletes, competition, date, migration),
	foreign key (athletes) references athletes(athletes),
	foreign key (competition) references competition(nom)
);