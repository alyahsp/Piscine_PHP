<?php session_start();
if ($_SESSION['install'] != 1)
	include "./install.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Topshop</title>
	<link rel="stylesheet" href="index.css">
</head>
<?php
	include "header.php";
?>
<body>
	<a href="page_categorie.php?JustIn=yes">
		<img src="http://media.topshop.com/wcsstore/ConsumerDirectStorefrontAssetStore/images/colors/color14/cms/pages/static/static-0000081416/images/hero-home-or-away-fr.jpg" alt="Photo Home" width="100%" max-height="500">
	</a>
</body>
</html>
