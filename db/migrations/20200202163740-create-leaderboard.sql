CREATE TABLE leaderboard (
	athletes int,
	competition varchar(50),
	date date,
	migration date,
	PRIMARY KEY (athletes, competition, date, migration),
	foreign key (athletes) references athletes(athletes),
	foreign key (competition) references competition(nom),
);