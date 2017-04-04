#!/usr/bin/php
<?php
if ($argc == 2)
{
	$equ = trim($argv[1]);
	$equ = preg_replace('/\s+/', ' ', $equ);
	$i = 0;
	$len = strlen($equ);
	while ($equ[$i] == "+" || $equ[$i] == "-")
		$nb1 = $nb1.$equ[$i++];
	while ($i < $len && $equ[$i] != "+" && $equ[$i] != "-" && $equ[$i] != "*"
	&& $equ[$i] != "/" && $equ[$i] != "%")
		$nb1 = $nb1.$equ[$i++];
	if ($i < $len)
		$op = $equ[$i++];
	while ($i < $len)
		$nb2 = $nb2.$equ[$i++];
	$nb1 = trim($nb1);
	$op = trim($op);
	$nb2 = trim($nb2);
	if (is_numeric($nb1) && is_numeric($nb2))
	{
		if (!strcmp($op, "+"))
			echo ($nb1 + $nb2) . "\n";
		else if (!strcmp($op, "-"))
			echo ($nb1 - $nb2) . "\n";
		else if (!strcmp($op, "*"))
			echo ($nb1 * $nb2) . "\n";
		else if (!strcmp($op, "/"))
			echo ($nb1 / $nb2) . "\n";
		else if (!strcmp($op, "%"))
			echo ($nb1 % $nb2) . "\n";
	}
	else
		echo "Syntax Error\n";
}
else
	echo "Incorrect Parameters\n";
?>
