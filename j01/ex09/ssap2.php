#!/usr/bin/php
<?php
if ($argc > 1)
{
	unset($argv[0]);
	print_r($argv);
	$str = implode(" ",$argv);
	$str = trim($str);
	$str = preg_replace('/\s+/', ' ', $str);
	$str = explode(" ", $str);
	foreach ($str as $type) {
		if (ctype_alpha($type))
			$alpha[] = $type;
		else if (is_numeric($type))
			$nb[] = $type;
		else
			$oth[] = $type;
	}
	sort($alpha, SORT_FLAG_CASE | SORT_STRING);
	sort($nb, SORT_STRING);
	sort($oth);
	$str = array_merge($alpha, $nb, $oth);
	foreach ($str as $type)
		echo $type . "\n";
}
?>
