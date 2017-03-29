#!/usr/bin/php
<?php
$str = $argv[1];
$str = trim($str);
$str = preg_replace('/\s+/', ' ', $str);
$str = explode(" ", $str);
$i = 1;
while ($str[$i])
{
	echo $str[$i] . " ";
	$i++;
}
echo $str[0] . "\n";
?>
