#!/usr/bin/php
<?php
if ($argc == 2)
{
	if ($argv[1] === "mais pourquoi cette demo ?")
	{
		echo "Tout simplement pour qu'en feuilletant le sujet\n";
		echo "on ne s'apercoive pas de la nature de l'exo\n";
	}
	else if ($argv[1] === "mais pourquoi cette chanson ?")
		echo "Parce que Kwame a des enfants\n";
	else if ($argv[1] === "vraiment ?")
	{
		$tab[0] = "Nan c'est parce que c'est le premier avril\n";
		$tab[1] = "Oui il a vraiment des enfants\n";
		$key = array_rand($tab, 1);
		echo $tab[$key];
	}
}
?>
