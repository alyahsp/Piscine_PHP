<?php
	function ft_split($str)
	{
		$str = rtrim($str);
		$str = ltrim($str);
		$str = preg_replace('/\s+/', ' ', $str);
		$str = explode(" ", $str);
		sort($str);
		return ($str);
	}
?>
