#!usr/bin/env php
<?php
if ($arg = 1)
{
	$str = trim($argv[1]);
	$str = preg_replace("/ +/", " ", $str);
	if ($str)
		echo ("$str\n");
}
?>
