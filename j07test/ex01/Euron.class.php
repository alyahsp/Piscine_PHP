<?php

include('Greyjoy.class.php');
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
class Euron extends Greyjoy {
	public function announceMotto() {
		print($this->familyMotto . PHP_EOL);
	}
}

?>
