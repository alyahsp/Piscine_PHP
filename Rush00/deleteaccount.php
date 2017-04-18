<?php
	session_start();
	header("Location: index.php");
	$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL : " . mysqli_connect_error();
	if ($_POST['Confirm'])
	{
		$res = mysqli_query($link, "SELECT Password FROM User WHERE Login='" . mysqli_real_escape_string($link, $_SESSION['loggued_on_user']) . "';");
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
		if (hash('whirlpool', $_POST['pwd']) == $row['Password'])
		{
			mysqli_query($link, "DELETE FROM User WHERE Login='" . mysqli_real_escape_string($link, $_SESSION['loggued_on_user']) . "';");
			$_SESSION['loggued_on_user'] ="";
			echo "ACCOUNT DELETED\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
