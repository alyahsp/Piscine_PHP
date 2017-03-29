#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$tmp = fopen("php://stdin","r");
	if ($nb = fgets($tmp))
	{
		$nb = rtrim($nb);
		if (is_numeric($nb))
		{
			if ($nb % 2 == 0)
				echo "Le chiffre $nb est Pair\n";
			else if ($nb % 2 != 0)
				echo ("Le chiffre $nb est Impair\n");
		}
		else {
			echo "'$nb' n'est pas un chiffre\n";
		}
	}
	else {
		echo "\n";
		return ;
	}
}
?>
