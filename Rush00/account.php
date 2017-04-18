<?php session_start();
	$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL : " . mysqli_connect_error();
?>
	<html>
	<head>
		<title>Topshop - Se Connecter</title>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="product.css">
	</head>
<?php
	include "header.php";
?>
	<body>
		<div class="connect_boxes";>
			<h1>Mon Compte</h1>
			<div class="existing_client">
				<a class="espace" href="logout.php" title="logout">
					<h2>Se Deconnecter</h2>
				</a>
			</div>
			<div class="new_client">
				<h2>Supprimer Compte</h2>
				<form action="deleteaccount.php" method="post">
					Mot de passe: <input type="password" name="pwd" value="" />
					<br />
					<input type="checkbox" name="Confirm" value="OK">Confirmer la suppression du compte<br/>
					<input type="submit" name="submit" value="Supprimer" /> <br />
				</form>
			</div>
		<?php
			$res = mysqli_query($link, "SELECT * FROM User WHERE Login='" . mysqli_real_escape_string($link, $_SESSION['loggued_on_user']) . "';");
			$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
			$admin = $row['Admin'];
			if ($admin == 'yes')
			{
				$_SESSION['Admin'] = 'admin';
		?>
				<h2 class="adminlink"><a href="admin.php">Enter the Admin World</a></h2>
		<?php }
		?>
		</div>
	</body>
</html>
