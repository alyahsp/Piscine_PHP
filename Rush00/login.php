<?php
session_start();
$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
if (mysqli_connect_errno())
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
header('Location: index.php');
if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM User WHERE Login='" . mysqli_real_escape_string($link, $_POST['login']) . "';")) !== 0)
{
	$res = mysqli_query($link, "SELECT Password FROM User WHERE Login='" . mysqli_real_escape_string($link, $_POST['login']) . "';");
	$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
	if (hash('whirlpool', $_POST['passwd']) == $row['Password'])
	{
		$_SESSION['loggued_on_user'] = $_POST['login'];
		echo "OK\n";
	}
	else
	{
		$_SESSION['loggued_on_user'] ="";
		echo "ERROR\n";
	}
}
else
{
	$_SESSION['loggued_on_user'] ="";
	echo "ERROR\n";
}
?>
