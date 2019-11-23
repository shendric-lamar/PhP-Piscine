#!usr/bin/php
<?php
date_default_timezone_set('Europe/Brussels');
$valid = 0;
$arr = explode(" ", $argv[1]);
if ($argc != 2)
	exit;
if (count($arr) != 5)
{
	echo "Wrong Format\n";
	exit;
}
$long_month = array(1, 3, 5, 7, 8, 10, 12);
$short_month = array(4, 6, 9, 11);
$feb = 2;
$dn = array("lundi", "jeudi", "mercredi", "mardi", "vendredi", "samedi", "dimanche");
$d = range(1,31);
$m = array(
        1 => "janvier",
        2 => "fevrier",
        3 => "mars",
        4 => "avril",
        5 => "mai",
        6 => "juin",
        7 => "juillet",
        8 => "aout",
        9 => "septembre",
        10 => "octobre",
        11 => "novembre",
        12 => "decembre");
if (in_array(strtolower($arr[0]), $dn))
	$valid += 1;
if (in_array($arr[1], $d))
{
	$valid += 1;
	$day = $arr[1];
}
if (in_array(strtolower($arr[2]), $m))
{
	$valid += 1;
	$month = array_search(strtolower($arr[2]), $m);
}
if (strlen($arr[3]) == 4)
{
	$valid += 1;
	$year = $arr[3];
}
if (strlen($arr[4]) == 8)
	$valid += 1;
$time = explode(":", $arr[4]);
if (($time[0] >= 0 && $time[0] <= 24))
	$valid += 1;
if (($time[1] >= 0 && $time[1] <= 60))
{
	$valid += 1;
	$min = $time[1];
}
if (($time[2] >= 0 && $time[2] <= 60))
{
	$valid += 1;
	$sec = $time[2];
}
$date = mktime($hour, $min, $sec, $month, $day, $year);
if ((in_array($month, $short_month) && $day > 30) || ($month == 2 && $day > 28 && $year % 4 != 0))
{
	echo "Invalid Date\n";
	exit;
}
if ($valid != 8)
	echo "Wrong Format\n";
else
	echo "$date\n";
?>
