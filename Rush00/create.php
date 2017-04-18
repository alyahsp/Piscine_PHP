<?php
session_start();
$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
if (mysqli_connect_errno())
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
header('Location: index.php');
if ($_POST['submit'] === "S'inscrire")
{
	if (!$_POST['login'] || !$_POST['passwd'])
	{
		echo "ERROR 1\n";
		return ;
	}
	if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM User WHERE Login='" . mysqli_real_escape_string($link, $_POST['login']) . "';")) !== 0)
	{
		echo "ERROR 2\n";
		return ;
	}
	else
	{
		mysqli_query($link, "INSERT INTO User VALUES (null, '" . $_POST['login'] . "', '" . hash('whirlpool', $_POST['passwd']) . "', 'no');");
		$_SESSION['loggued_on_user'] = $_POST['login'];
		echo "OK\n";
	}
}
else
	echo "ERROR 3\n";
?>
