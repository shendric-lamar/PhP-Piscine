<?php
	$i = 0;
	if ($argc > 1) {
		$arr = explode(" ", $argv[1]);
		$size = count($arr);
		$arr[$size] = $arr[0];
		unset($arr[0]);
		foreach ($arr as $elem) {
			echo ("$elem");
			$i++;
			if ($i < $size)
				echo (" ");
			else
				echo ("\n");
		}
	}

?>
