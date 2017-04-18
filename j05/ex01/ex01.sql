CREATE TABLE ft_table
(
	id					INT(11)								AUTO_INCREMENT NOT NULL,
	login				CHAR(8)								DEFAULT 'toto',
	groupe				ENUM('staff', 'student', 'other')	NOT NULL,
	date_de_creation	DATE								NOT NULL,
	PRIMARY KEY (id)
);
