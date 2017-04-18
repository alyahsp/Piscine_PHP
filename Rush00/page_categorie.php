<?php
	session_start();
	$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL : " . mysqli_connect_error();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Topshop</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="product.css">
</head>
	<body>
		<?php
			include "header.php";
		?>
		<div style = "text-align: center;">
			<?php
				if (isset($_GET['category']))
					$result = mysqli_query($link, "SELECT * FROM Product WHERE Category='" . mysqli_real_escape_string($link, $_GET['category']) . "'");
				else if (isset($_GET['JustIn']))
					$result = mysqli_query($link, "SELECT * FROM Product WHERE JustIn='yes'");
				else
					$result = mysqli_query($link, "SELECT * FROM Product");
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
				{?>
					<div class="row" style = "display: inline-block;">
					<form method="post" action="add_cart.php">
						<img class = "product" src = "<?= $row['ImgURL']; ?>"><br/>
						<a class = "description"><?= $row['ProdTitle'] . "\n"; ?> <br/> <?php echo $row['ProdPrice'] . "€";?></a>
						<div>
							<input type="hidden" name="ProdTitle" value="<?= $row['ProdTitle'] ?>" />
						</div>
						<div>
							<input type="hidden" name="ProdID" value="<?= $row['ProdID'] ?>" />
						</div>
						<div>
							<input type="hidden" name="ProdPrice" value="<?= $row['ProdPrice'] ?>" />
						</div>
						<div>
							<input type="hidden" name="ImgURL" value="<?= $row['ImgURL'] ?>" />
						</div>
						<input type="number" name="quantity" min="1" max="5" value="1"/>
						<input type="submit" name="submit" value="Add to Cart"/>
					</form>
					</div>
				<?php }?>
		</div>
	</body>
</html>
