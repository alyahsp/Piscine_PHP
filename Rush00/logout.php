<?php
session_start();
if ($_SESSION['loggued_on_user'] !== false)
	$_SESSION['loggued_on_user'] = "";
if ($_SESSION['Admin'] !== false)
	$_SESSION['Admin'] = "";
header('Location: index.php')
?>
