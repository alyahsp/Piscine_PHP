#!/usr/bin/php
<?php
if (defined('STDIN'))
{
	$i = 1;
	while ($argv[$i])
	{
		echo $argv[$i] . "\n";
		$i++;
	}
}
else {
	echo "\n" ;
	return ;
}
?>
