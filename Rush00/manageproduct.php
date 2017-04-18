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
	<!-- <h1>Gestion Produits</h1> -->
	<div class="usermod">
		<table border="1">
			<tr>
				<th>ProdID</th>
				<th>ProdTitle</th>
				<th>ImgURL</th>
				<th>ProdPrice</th>
				<th>ProdQuantity</th>
				<th>Category</th>
				<th>JustIn</th>
			</tr>
		<?php
			$result = mysqli_query($link, "SELECT * FROM Product");
			while($row = mysqli_fetch_array($result))
			{
				echo "<form action='modify_prod.php' method='post'>";
				echo "<tr>";
				echo "<td>" . $row['ProdID'] . "</td>";
				echo "<input type='hidden' name='ProdID' value='".$row['ProdID']."'>";
				echo "<td><input type='txt' name='ProdTitle' value='".$row['ProdTitle']."'></td>";
				echo "<td><input id='txt' type='text' name='ImgURL' value='".$row['ImgURL']."'></td>";
				echo "<td><input id='txt' type='text' name='ProdPrice' value='".$row['ProdPrice']."'></td>";
				echo "<td><input type='txt' name='ProdQuantity' value='".$row['ProdQuantity']."'></td>";
				echo "<td><input id='txt' type='text' name='Category' value='".$row['Category']."'></td>";
				echo "<td><input id='txt' type='text' name='JustIn' value='".$row['JustIn']."'></td>";
				echo "<td><input type='submit' name='Modify' value='Modifier'></td>";
				echo "<td><input type='submit' name='Delete' value='Supprimer'></td>";
				echo "</tr>";
				echo "<br></form>";
			}
		?>
		<h2>Gestion Produits</h2>
		<table border="1">
			<tr>
				<th>ProdTitle</th>
				<th>ImgURL</th>
				<th>ProdPrice</th>
				<th>ProdQuantity</th>
				<th>Category</th>
				<th>JustIn</th>
			</tr>
		<?php
			echo "<form action='modify_prod.php' method='post'>";
			echo "<tr>";
			echo "<td><input type='txt' name='ProdTitle1' value=''></td>";
			echo "<td><input type='txt' name='ImgURL1' value='' class='passwd'></td>";
			echo "<td><input type='txt' name='ProdPrice1' value=''></td>";
			echo "<td><input type='txt' name='ProdQuantity1' value=''></td>";
			echo "<td><input type='txt' name='Category1' value=''></td>";
			echo "<td><input type='checkbox' name='JustIn1' value='yes'></td>";
			echo "<td><input type='submit' name='Create' value='Creer'></td>";
			echo "</tr>";
			echo "<br></form>";
		?>
	</div>
</body>
</html>
<?php } ?>
