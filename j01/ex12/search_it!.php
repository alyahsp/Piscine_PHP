#!/usr/bin/php
<?php
if ($argc > 2)
{
	unset($argv[0]);
	$key = $argv[1];
	unset($argv[1]);
	$str = implode(":", $argv);
	$str = explode(":", $str);
	$i = 0;
	$hel = false;
	while ($str[$i] || $str[$i] === "0")
	{
		if (!strcmp($str[$i], $key))
		{
			$val = $str[$i + 1] . "\n";
			$hel = true;
		}
		$i = $i + 2;
	}
	if ($hel)
		echo $val;
}
else {
	return ;
}
?>
