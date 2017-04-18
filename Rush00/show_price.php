<?PHP
session_start();
if ($_SESSION["cart"])
{
	$total = 0;
	foreach ($_SESSION["cart"] as $product)
		$total += ($product["price"] * $product["quantity"]);
	echo $total."€\n";
}
	else
		echo "0€\n";
?>
