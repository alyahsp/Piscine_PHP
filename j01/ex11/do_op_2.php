#!/usr/bin/php
<?php
if ($argc == 2)
{
	$equ = trim($argv[1]);
	$equ = preg_replace('/[*]/', " * ", $equ);
	$equ = preg_replace('/[-]/', " - ", $equ);
	$equ = preg_replace('/[+]/', " + ", $equ);
	$equ = preg_replace('/[\/]/', " / ", $equ);
	$equ = preg_replace('/[%]/', " % ", $equ);
	$equ = preg_replace('/\s+/', ' ', $equ);
	$equ = explode(" ", $equ);
	if (!is_numeric($equ[0]) || !is_numeric($equ[2]) || count($equ) != 3)
	{
		echo "Syntax Error\n";
		exit();
	}
	if (!strcmp($equ[1], "+"))
		echo ($equ[0] + $equ[2]) . "\n";
	else if (!strcmp($equ[1], "-"))
		echo ($equ[0] - $equ[2]) . "\n";
	else if (!strcmp($equ[1], "*"))
		echo ($equ[0] * $equ[2]) . "\n";
	else if (!strcmp($equ[1], "/"))
		echo ($equ[0] / $equ[2]) . "\n";
	else if (!strcmp($equ[1], "%"))
		echo ($equ[0] % $equ[2]) . "\n";
}
else
	echo "Incorrect Parameters\n";
?>
