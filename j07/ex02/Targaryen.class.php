<?php
Class Targaryen{
	public function resistsFire(){
		return False;
	}

	public function getBurned(){
		// $boo = static::resistsFire();
		if (static::resistsFire() == False)
			return('burns alive');
		else
			return('emerges naked but unharmed');
	}

}
?>
