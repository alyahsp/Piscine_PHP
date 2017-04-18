<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
include_once('IFighter.class.php');
include_once('NightsWatch.class.php');

class Varys implements IFighter {
	public function pretendToFight() {
		print("* finds someone to fight for him *" . PHP_EOL);
	}
}

$varys = new Varys();
$nw = new NightsWatch();

$nw->recruit($varys);

$nw->fight();

?>
