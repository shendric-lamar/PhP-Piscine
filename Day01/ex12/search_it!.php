<?php
	$word = $argv[1];
	$size = strlen($word);
	$arr = array();
	$i = 0;
	$arg = 2;
	foreach ($argv as $elem) {
		if ($arg++ > 2) {
			$arr[$i] = $elem;
			$i++;
		}
	}
	$str = implode($arr);
	$index = strrpos($str, $word);
	if ($index == 0)
		return ;
	$key = substr($str, ($index + $size + 1));
	echo $key."\n";
?>
