<?php
	function ft_is_sort($arr) {
		$temp = $arr;
		sort($arr);
		if ($temp == $arr)
			return (TRUE);
		else
			return (FALSE);
	}
?>
