<?php
Class Jaime extends Lannister{

	public function sleepWith($person)
	{
		if (get_parent_class($person) == 'Lannister' && get_class($person) == 'Cersei')
			print("With pleasure, but only in a tower in Winterfell, then.\n");
		else if (get_parent_class($person) == 'Lannister')
			print("Not even if I'm drunk !\n");
		else
			print("Let's do this.\n");
	}
}
?>
