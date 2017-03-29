#!/usr/bin/php
<?php
unset($argv[0]);
$str = implode(" ",$argv);
$str = trim($str);
$str = preg_replace('/\s+/', ' ', $str);
$str = explode(" ", $str);
sort($str);
foreach ($str as $value) {
	echo $value . "\n";
}
?>
