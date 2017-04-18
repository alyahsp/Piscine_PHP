<?PHP
session_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PANIER</title>
	<link rel="stylesheet" href="index.css">
</head>
<?php
	include "header.php";
?>
<body>
	<div class="main-banner">
		<!-- <div class="logo">
			<a href="index.php">
				<img alt="Topshop" class="logo" src="https://media.topshop.com/wcsstore/ConsumerDirectStorefrontAssetStore/images/colors/color14/v3/logo.gif">
			</a>
		</div> -->
<p>Les frais de port sont offerts pendant toute la durée des soldes.</p>
<?PHP
	if ($_SESSION["cart"] == '')
		echo "<a href=page_categorie.php>Your Cart is empty, Let's Go Shopping !</a><br/>\n";
	else
	{
		foreach($_SESSION["cart"] as $article)
			echo $article["name"]." -- Quantity: ".$article["quantity"]." -- Unit Price: ".$article["price"]."<br/>\n";
		$total = 0;
		foreach ($_SESSION["cart"] as $product)
			$total += ($product["price"] * $product["quantity"]);
		echo "<br/>\nTOTAL			".$total."€<br/>\n";
	}
	if ($_SESSION["loggued_on_user"] == '')
		echo "<br/>\nYou must be loggued as a Registered User to checkout<br/>\n";
	else if ($_SESSION["cart"] == '');
	else
		echo "<a href=checkout.php>CHECKOUT</a><br/>\n";
	if ($_SESSION["cart"] != '')
	echo"<a href=clean_cart.php>Empty your cart</a><br/>\n";
?>
</body>
</html>
