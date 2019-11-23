#!usr/bin/php
<?php
$str = trim(preg_replace("/ +/", " ", $argv[1]));
if ($str[0] != "")
	echo ("$str\n");
else
	exit;
?>
