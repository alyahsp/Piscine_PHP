<?php
	session_start();
	if (isset($_SESSION['Admin']))
	{
		header('Location: manageproduct.php');
		$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
		if (mysqli_connect_errno())
			echo "Failed to connect to MySQL : " . mysqli_connect_error();

		if ($_POST['Modify'])
		{
			if (!$_POST['ProdTitle'] || !$_POST['ImgURL'] || !$_POST['ProdPrice'] || !$_POST['Category'])
			{
				echo "ERROR 1\n";
				return ;
			}
			if (empty($_POST['ProdQuantity']))
				$_POST['ProdQuantity'] = 0;
			mysqli_query($link, "UPDATE Product SET ProdTitle='" . $_POST['ProdTitle'] . "', ImgURL='" . $_POST['ImgURL'] . "', ProdPrice='" . $_POST['ProdPrice'] . "', ProdQuantity='" . $_POST['ProdQuantity'] . "',  Category='" . $_POST['Category'] . "', JustIn='" . $_POST['JustIn'] . "' WHERE ProdID='" . mysqli_real_escape_string($link, $_POST['ProdID']) . "';");
			echo "Modified Product";
		}
		else if ($_POST['Delete'])
		{
			mysqli_query($link, "DELETE FROM Product WHERE ProdID='" . mysqli_real_escape_string($link, $_POST['ProdID']) ."';");
			echo "DELETED Product";
		}
		else if ($_POST['Create'])
		{
			if (!$_POST['ProdTitle1'] || !$_POST['ImgURL1'] || !$_POST['ProdPrice1'] || !$_POST['Category1'])
			{
				echo "ERROR 1\n";
				return ;
			}
			if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM Product WHERE ProdTitle='" . mysqli_real_escape_string($link, $_POST['ProdTitle1']) . "';")) !== 0)
			{
				echo "ERROR 2\n";
				return ;
			}
			else
			{
				if (!isset($_POST['JustIn1']))
					$_POST['JustIn1'] = 'no';
				mysqli_query($link, "INSERT INTO Product VALUES (null, '" . $_POST['ProdTitle1'] . "', '" . $_POST['ImgURL1'] . "', '" . $_POST['ProdPrice1'] . "', '" . $_POST['ProdQuantity1'] . "', '" . $_POST['Category1'] . "', '" . $_POST['JustIn1'] . "');");
				echo "Created Product";
			}
		}
		else
			echo "ERROR";
	}
?>
