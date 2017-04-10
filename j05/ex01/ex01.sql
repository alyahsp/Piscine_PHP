CREATE TABLE ft_table
(
	id					INT(11)								NOT NULL AUTO_INCREMENT,
	login				VARCHAR(8)							DEFAULT 'toto',
	groupe				ENUM('staff', 'student', 'other')	NOT NULL,
	date_de_creation	DATE								NOT NULL,
	PRIMARY KEY (id);
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
