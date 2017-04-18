<?php
	session_start();
	if (isset($_SESSION['Admin']))
	{
		header('Location: admin.php');
		$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
		if (mysqli_connect_errno())
			echo "Failed to connect to MySQL : " . mysqli_connect_error();

		if ($_POST['Modify'])
		{
			if (!$_POST['Login'] || !$_POST['Password'])
			{
				echo "ERROR 1\n";
				return ;
			}
			if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM User WHERE Login='" . mysqli_real_escape_string($link, $_POST['Login']) . "';")) !== 0)
			{
				echo "ERROR 2\n";
				return ;
			}
			mysqli_query($link, "UPDATE User SET Login='". $_POST['Login'] . "', Password='" . $_POST['Password'] . "', Admin='" . $_POST['Admin'] . "' WHERE UserID='" . mysqli_real_escape_string($link, $_POST['UserID']) ."';");
			echo "Modified User";
		}
		else if ($_POST['Delete'])
		{
			mysqli_query($link, "DELETE FROM User WHERE UserID='" . mysqli_real_escape_string($link, $_POST['UserID']) ."';");
			echo "DELETED User";
		}
		else if ($_POST['Create'])
		{
			if (!$_POST['Login1'] || !$_POST['Password1'])
			{
				echo "ERROR 1\n";
				return ;
			}
			if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM User WHERE Login='" . mysqli_real_escape_string($link, $_POST['Login1']) . "';")) !== 0)
			{
				echo "ERROR 2\n";
				return ;
			}
			else
			{
				if (!isset($_POST['Admin1']))
					$_POST['Admin1'] = 'no';
				mysqli_query($link, "INSERT INTO User VALUES (null, '" . $_POST['Login1'] . "', '" . hash('whirlpool', $_POST['Password1']) . "', '" . $_POST['Admin1'] . "');");
				echo "Created User";
			}
		}
		else
			echo "ERROR";
	}
?>
