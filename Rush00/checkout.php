<?php
session_start();
header('Location: index.php');
$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
if (mysqli_connect_errno())
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
$res = mysqli_query($link, "SELECT UserID FROM User WHERE Login='" . mysqli_real_escape_string($link, $_SESSION['loggued_on_user']) . "';");
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
date_default_timezone_set("Europe/Paris");
foreach ($_SESSION["cart"] as &$product)
{
	mysqli_query($link, "INSERT INTO Cart
		VALUES (null, '" . $product['id'] . "',  '" . $row['UserID'] . "', '" . $product['quantity'] ."');");
}
$_SESSION["cart"] = '';
?>
