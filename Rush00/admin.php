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
	<!-- <h1>Gestion Utilisateurs</h1> -->
	<div class="usermod">
		<table border="1">
			<tr>
				<th>UserID</th>
				<th>Login</th>
				<th>Password</th>
				<th>Admin</th>
			</tr>
		<?php
			$result = mysqli_query($link, "SELECT * FROM User");
			while($row = mysqli_fetch_array($result))
			{
				echo "<form action='modify_usr.php' method='post'>";
				echo "<tr>";
				echo "<td>" . $row['UserID'] . "</td>";
				echo "<input type='hidden' name='UserID' value='".$row['UserID']."'>";
				echo "<td><input type='txt' name='Login' value='".$row['Login']."'></td>";
				echo "<td><input id='txt' type='text' name='Password' value='".$row['Password']."'></td>";
				echo "<td><input id='txt' type='text' name='Admin' value='".$row['Admin']."'></td>";
				echo "<td><input type='submit' name='Modify' value='Modifier'></td>";
				echo "<td><input type='submit' name='Delete' value='Supprimer'></td>";
				echo "</tr>";
				echo "<br></form>";
			}
		?>
		<h2>Gestion Utilisateurs</h2>
		<table border="1">
			<tr>
				<th>Login</th>
				<th>Password</th>
				<th>Admin</th>
			</tr>
		<?php
			echo "<form action='modify_usr.php' method='post'>";
			echo "<tr>";
			echo "<td><input type='txt' name='Login1' value=''></td>";
			echo "<td><input id='txt' type='password' name='Password1' value='' class='passwd'></td>";
			echo "<td><input type='checkbox' name='Admin1' value='Yes'></td>";
			echo "<td><input type='submit' name='Create' value='Creer'></td>";
			echo "</tr>";
			echo "<br></form>";
		?>
	</div>
</body>
</html>
<?php } ?>
