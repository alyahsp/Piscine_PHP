<?php session_start(); ?>
<header>
	<div class="main-banner">
		<div class="logo">
			<a href="index.php">
				<img alt="Topshop" class="logo" src="https://media.topshop.com/wcsstore/ConsumerDirectStorefrontAssetStore/images/colors/color14/v3/logo.gif">
			</a>
		</div>
		<?php
		if ($_SESSION['loggued_on_user'] === "")
		{
		?>
		<div class="account" id="account-icon">
			<a class="espace" href="connect.php" title="Mon Espace">
				<span class="img">
					<img src="https://secure.photobox.com/assets/content_graphics/86/108786.png?1477387925" class="icon" width="60" height="60">
					<span>Se Connecter</span>
				</span>
			</a>
		</div>
		<?php
		}
		else
		{ ?>
		<div class="account" id="account-icon">
			<a class="espace" href="account.php" title="compte">
				<span class="img">
					<img src="https://secure.photobox.com/assets/content_graphics/86/108786.png?1477387925" class="icon" width="60" height="60">
					<span>Mon Compte</span>
				</span>
			</a>
		</div>
		<?php } ?>
		<div class="basket">
			<a class="panier" href="panier.php" id="basket-icon" title="Panier">
				<span class="img">
					<img class="icon" src="https://secure.photobox.com/assets/content_graphics/91/98491.png?1477387696">
				</span>
			</a>
		</div>
	</div>
	<div class="categories">
		<a class="catg" href="page_categorie.php">Tous Les Produits</a>
		<a class="catg" href="page_categorie.php?JustIn=yes">Nouveautes</a>
		<a class="catg" href="page_categorie.php?category=Hommes">Hommes</a>
		<a class="catg" href="page_categorie.php?category=Femmes">Femmes</a>
	</div>
</header>
