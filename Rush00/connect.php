<?php session_start() ?>
<html>
<head>
	<title>Topshop - Se Connecter</title>
	<link rel="stylesheet" href="index.css">
</head>
<?php
	include "header.php";
?>
<body>
	<div class="connect_boxes">
		<h1>Se Connecter</h1>
		<div class="existing_client">
			<h2>Clients Existants</h2>
			<form action="login.php" method="post">
				Identifiant: <input type="text" name="login" value="" />
				<br />
				Mot de passe: <input type="password" name="passwd" value=""/> <br/>
				<input type="submit" name="submit" value="Login" /> <br />
			</form>
		</div>
		<div class="new_client">
			<h2>Nouveaux Clients</h2>
			<form action="create.php" method="post">
			Identifiant: <input type="text" name="login" value="" />
			<br />
			Mot de passe: <input type="password" name="passwd" value=""/> <br/>
			<input type="submit" name="submit" value="S'inscrire" /> <br />
		</form>
		</div>
	<!-- <a href="modif.html">Change Password</a> -->
</body></html>
