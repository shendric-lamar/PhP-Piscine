<?php
	if ($argc != 2)
		echo "Incorrect Parameters\n";
	else {
		$str = str_replace(" ", "", $argv[1]);
		$a = intval($str);
		$sign = $str[strlen($a)];
		$b = substr($str, (strlen($a) + 1));
		if ($b == 0 && ($sign == "/" || $sign == "%"))
			echo "Syntax Error\n";
		else if ($sign == "+")
			echo $a + $b."\n";
		else if ($sign == "-")
			echo $a - $b."\n";
		else if ($sign == "/")
			echo $a / $b."\n";
		else if ($sign == "%")
			echo $a % $b."\n";
		else if ($sign == "*")
			echo $a * $b."\n";
		else
			echo "Syntax Error\n";
}
?>
