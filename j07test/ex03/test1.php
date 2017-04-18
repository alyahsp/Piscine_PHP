<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
include('House.class.php');

class HouseStark extends House {
	public function getHouseName() {
		return "Stark";
	}
	public function getHouseMotto() {
		return "Winter is coming";
	}
	public function getHouseSeat() {
		return "Winterfell";
	}
}

class HouseMartell extends House {
	public function getHouseName() {
		return "Martell";
	}
	public function getHouseMotto() {
		return "Unbowed, Unbent, Unbroken";
	}
	public function getHouseSeat() {
		return "Sunspear";
	}
}

$houses = Array(new HouseStark(), new HouseMartell());

foreach ($houses as $house) {
	$house->introduce();
}

?>