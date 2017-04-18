<?php
	session_start();
	if (isset($_SESSION['Admin']))
	{
		header('Location: manageorder.php');
		$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
		if (mysqli_connect_errno())
			echo "Failed to connect to MySQL : " . mysqli_connect_error();

		if ($_POST['Modify'])
		{
			if (!$_POST['UserID'] || !$_POST['ProdID'] || !$_POST['Quantity'])
			{
				echo "ERROR 1\n";
				return ;
			}
			mysqli_query($link, "UPDATE Cart SET ProdID='". $_POST['ProdID'] . "', UserID='" . $_POST['UserID'] . "', Quantity='" . $_POST['Quantity'] . "' WHERE OrderID='" . mysqli_real_escape_string($link, $_POST['OrderID']) ."';");
			echo "Modified Order";
		}
		else if ($_POST['Delete'])
		{
			mysqli_query($link, "DELETE FROM Cart WHERE OrderID='" . mysqli_real_escape_string($link, $_POST['OrderID']) ."';");
			echo "DELETED Order";
		}
		else if ($_POST['Create'])
		{
			if (!$_POST['UserID1'] || !$_POST['ProdID1'] || !$_POST['Quantity1'])
			{
				echo "ERROR 1\n";
				return ;
			}
			else
			{
				mysqli_query($link, "INSERT INTO Cart VALUES (null, '" . $_POST['ProdID1'] . "', '" . $_POST['UserID1'] . "', '" . $_POST['Quantity1'] . "');");
				echo "Created User";
			}
		}
		else
			echo "ERROR";
	}
?>
