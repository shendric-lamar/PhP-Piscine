#!usr/bin/php
<?php
$word = $argv[1];
$size = strlen($word);
$arg = 2;
$arr = array();
$i = 0;
foreach($argv as $elem)
{
	if ($arg++ > 2)
	{
		$arr[$i] = $elem;
		$i++;
	}
}
$str = implode($arr);
$index = strrpos($str, $word);
if ($index == 0)
	exit;
$result = substr($str, ($index + $size  + 1));
echo "$result\n";
?>
