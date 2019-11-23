#!usr/bin/php 
<?php
$arr = array();
if ($argc != 2)
	echo "Incorrect Parameters.\n";
else
{
	$str = str_replace(" ", "", $argv[1]);
	$size = strlen($str);
	$a = intval($str);
	$sign = $str[strlen($a)];
	$b = substr($str, (strlen($a)+ 1));
	if ($b == 0 && ($sign == "/" || $sign == "%"))
		echo "Wie deelt door nul, is een sul!\n";
	else if ($sign == "+")
		echo $a + $b."\n";
	else if ($sign == "-")
		echo $a - $b."\n";
	else if ($sign == "*")
		echo $a * $b."\n";
	else if ($sign == "/")
		echo $a / $b."\n";
	else if ($sign == "%")
		echo $a % $b."\n";
}
