<?php
	$arg = 1;
	$arr = array();
	foreach ($argv as $elem) {
		if ($arg++ > 1) {
			$temp = preg_split("/ +/", trim($elem));
			$arr = array_merge($arr, $temp);
		}
	}
	sort($arr);
	foreach ($arr as $elem) {
		echo ("$elem\n");
	}
?>
