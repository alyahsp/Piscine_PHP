#!/usr/bin/php
<?php
if ($argc == 4)
{
	$nb1 = trim($argv[1]);
	$sign = trim($argv[2]);
	$nb2 = trim($argv[3]);
	if (!strcmp($sign, "+"))
		echo ($nb1 + $nb2) . "\n";
	else if (!strcmp($sign, "-"))
		echo ($nb1 - $nb2) . "\n";
	else if (!strcmp($sign, "*"))
		echo ($nb1 * $nb2) . "\n";
	else if (!strcmp($sign, "/"))
		echo ($nb1 / $nb2) . "\n";
	else if (!strcmp($sign, "%"))
		echo ($nb1 % $nb2) . "\n";
}
else
	echo "Incorrect Parameters\n";
?>
