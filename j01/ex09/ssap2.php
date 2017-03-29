#!/usr/bin/php
<?php
if (argc > 1)
{
	unset($argv[0]);
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
	natcasesort($alpha);
	sort($nb);
	sort($oth);
	$str = array_merge($alpha, $nb, $oth);
	foreach ($str as $type)
		echo $type . "\n";
}
?>
