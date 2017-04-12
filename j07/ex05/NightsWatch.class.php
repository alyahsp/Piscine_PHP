<?php
Class NightsWatch implements IFighter{
	public function fight() {}

	public function recruit($person)
	{
		if ($person instanceof IFighter)
			$person->fight();
	}
}
?>
