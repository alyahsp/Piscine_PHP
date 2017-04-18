<?php
$_SESSION['install'] == 1;
$link = mysqli_connect("localhost", "root", "root", "", "8080");
if (mysqli_connect_errno())
	echo "Failed to connect to MySQL : " . mysqli_connect_error();

mysqli_query($link, "CREATE DATABASE IF NOT EXISTS GDB");

mysqli_query($link, "USE GDB");

mysqli_query($link, "CREATE TABLE IF NOT EXISTS User
(
	UserID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	Login VARCHAR(32) NOT NULL,
	Password VARCHAR(128) NOT NULL,
	Admin ENUM('yes','no') DEFAULT 'no' NOT NULL
);");

mysqli_query($link, "CREATE TABLE IF NOT EXISTS Product
(
	ProdID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	ProdTitle VARCHAR(100) NOT NULL,
	ImgURL VARCHAR(512) NOT NULL,
	ProdPrice DECIMAL(10, 2) NOT NULL,
	ProdQuantity INT,
	Category VARCHAR(128) NOT NULL,
	JustIn ENUM('yes','no') DEFAULT 'no' NOT NULL
);");

mysqli_query($link, "CREATE TABLE IF NOT EXISTS Cart
(
	OrderID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	ProdID INT NOT NULL,
	UserID INT NOT NULL,
	Quantity INT NOT NULL
	-- Order_Date DATETIME
	-- CONSTRAINT ProdID FOREIGN KEY REFERENCES Product (ProdID),
	-- CONSTRAINT User FOREIGN KEY REFERENCES User (UserID)
);");

if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM Product")) == 0)
{
	mysqli_query($link, "INSERT INTO Product
		VALUES (null, 'Short coupe patineuse à volants avec motif floral', 'http://media.topshop.com/wcsstore/TopShopFR/images/catalog/TS14C13LBLK_Large_F_1.jpg', '40', '20', 'Femmes', 'yes'),
		(null, 'Sweat Rouge À Motif Volcan Avec Col Roulé', 'http://media.topman.com/wcsstore/TopManFR/images/catalog/TM71D16PRED_Large_F_1.jpg', '44', '25', 'Hommes', 'yes'),
		(null, 'Top Bardot structuré avec liens sur les manches', 'http://media.topshop.com/wcsstore/TopShopFR/images/catalog/TS13X09LLIL_Large_F_1.jpg', '35', '20', 'Femmes', 'yes'),
		(null, 'T-Shirt Blanc Avec Imprimé Feuille', 'http://media.topman.com/wcsstore/TopManFR/images/catalog/TM71G48NWHT_Large_F_1.jpg', '20', '25', 'Hommes', 'no'),
		(null, 'Short De Bain Noir Par Nicce', 'http://media.topman.com/wcsstore/TopManFR/images/catalog/TM76N16NBLK_Large_F_1.jpg', '30', '25', 'Hommes', 'yes'),
		(null, 'Robe blazer sans manches', 'http://media.topshop.com/wcsstore/TopShopFR/images/catalog/TS17S04LIVR_Large_F_1.jpg', '76', '20', 'Femmes', 'yes'),
		(null, 'Jean Leigh indigo Grande', 'http://media.topshop.com/wcsstore/TopShopFR/images/catalog/TS30A56LIND_Large_F_1.jpg', '52', '20', 'Femmes', 'no'),
		(null, 'Lilac Maxi Dress', 'http://media.topshop.com/wcsstore/TopShopFR/images/catalog/TS35M12LLAC_Large_F_1.jpg', '195', '20', 'Femmes', 'yes')
	;");
}

if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM User")) == 0)
{
	mysqli_query($link, "INSERT INTO User
	VALUES (null, 'spalmaro', '905a0462d546022bada2de714e9762d465e4b88b0fb4d2aafd0f0ad625372ed09e3c8011991b2bfc0e89843758b80a0b685d521606683c4c6e9c44d93e371a70', 'yes'),
	(null, 'lportay', '25400707b77a1907ace24875cd7f5f4a4cee4c1bd8f976287e5ec2a912ce604b7bde726e913c3df79bff5ccf991364661c03b9632057628350565244f92ee9a5', 'yes')
	;");
}

if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM Cart")) == 0)
{
	mysqli_query($link, "INSERT INTO Cart
		VALUES(null, '1', '1', '1');");
	}
?>
