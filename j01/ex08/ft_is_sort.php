#!/usr/bin/php
<?php
function ft_is_sort($arr)
{
	$cmp = $arr;
	sort($cmp);
	$i = 0;
	while ($arr[$i])
	{
		if (strcmp($arr[$i], $cmp[$i]))
			return (false);
		$i++;
	}
	return (true);
}
?>
