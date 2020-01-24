<?php
	if ($arg = 1) {
		$str = trim($argv[1]);
		$str = preg_replace('!\s+!', ' ', $str);
		if ($str) {
			echo ("$str\n");
		}
	}
	else {
		echo ("error\n");
	}
?>
