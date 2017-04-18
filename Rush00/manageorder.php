<?php
	session_start();
	if (isset($_SESSION['Admin']))
	{
		$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
		if (mysqli_connect_errno())
			echo "Failed to connect to MySQL : " . mysqli_connect_error();
?>
<html>
<head>
	<title>Topshop - Admin World</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="product.css">
</head>
<?php
	include "adminheader.php"
?>
<body>
	<div class="usermod">
		<table border="1">
			<tr>
				<th>OrderID</th>
				<th>ProdID</th>
				<th>UserID</th>
				<th>Quantity</th>
			</tr>
		<?php
			$result = mysqli_query($link, "SELECT * FROM Cart");
			while($row = mysqli_fetch_array($result))
			{
				echo "<form action='modify_cart.php' method='post'>";
				echo "<tr>";
				echo "<td>" . $row['OrderID'] . "</td>";
				echo "<input type='hidden' name='OrderID' value='".$row['OrderID']."'>";
				echo "<td><input type='txt' name='ProdID' value='".$row['ProdID']."'></td>";
				echo "<td><input id='txt' type='text' name='UserID' value='".$row['UserID']."'></td>";
				echo "<td><input id='txt' type='text' name='Quantity' value='".$row['Quantity']."'></td>";
				echo "<td><input type='submit' name='Modify' value='Modifier'></td>";
				echo "<td><input type='submit' name='Delete' value='Supprimer'></td>";
				echo "</tr>";
				echo "<br></form>";
			}
		?>
		<h2>Gestion Commandes</h2>
		<table border="1">
			<tr>
				<th>ProdID</th>
				<th>UserID</th>
				<th>Quantity</th>
			</tr>
		<?php
			echo "<form action='modify_cart.php' method='post'>";
			echo "<tr>";
			echo "<td><input type='txt' name='ProdID1' value=''></td>";
			echo "<td><input id='txt' type='txt' name='UserID1' value=''></td>";
			echo "<td><input type='txt' name='Quantity1' value=''></td>";
			echo "<td><input type='submit' name='Create' value='Creer'></td>";
			echo "</tr>";
			echo "<br></form>";
		?>
	</div>
</body>
</html>
<?php } ?>
