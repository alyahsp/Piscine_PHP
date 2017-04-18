<?PHP
header('Location: page_categorie.php');
session_start();
$link = mysqli_connect("localhost", "root", "root", "GDB", "8080");
if (mysqli_connect_errno())
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
if ($_SESSION["cart"] == '')
	$_SESSION["cart"] = array();
foreach ($_SESSION["cart"] as &$product)
	if ($product["name"] == $_POST["ProdTitle"])
	{
		$product["quantity"] += $_POST["quantity"];
		exit ("Item added to cart\n");
	}
$item = array("id" => $_POST['ProdID'], "name" => $_POST["ProdTitle"], "price" => $_POST["ProdPrice"], "quantity" => $_POST["quantity"]);
$_SESSION["cart"][$_POST["ProdID"]] = $item;
exit ("Item added to cart\n");
?>
