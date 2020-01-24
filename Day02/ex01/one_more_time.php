<?php
	date_default_timezone_set("Europe/Brussels");
	$valid = 0;
	if ($argc != 2)
		return ;
	$arr = explode(" ", $argv[1]);
	if (count($arr) != 5) {
		echo "Wrong Format\n";
		return ;
	}
	$long_m = array(1, 3, 5, 7, 8, 10, 12);
	$short_m = array(4, 6, 9, 11);
	$feb = 2;
	$dn = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
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
		12=> "decembre"
	);
	if (in_array(strtolower($arr[0]), $dn))
		$valid++;
	if (in_array($arr[1], $d)) {
		$valid++;
		$day = $arr[1];
	}
	if (in_array(strtolower($arr[2]), $m)) {
		$valid++;
		$month = array_search(strtolower($arr[2]), $m);
	}
	if (strlen($arr[3]) == 4)
		$valid++;
	if (strlen($arr[4]) == 8 || strlen($arr[4]) == 7)
		$valid++;
	$time = explode(":", $arr[4]);
	if ($time[0] < 24 && $time[0] >= 0)
		$valid++;
	if ($time[1] < 59 && $time[1] >= 0)
		$valid++;
	if ($time[2] < 59 && $time[2] >= 0)
		$valid++;
	if ((in_array($month, $short_m) && $day > 30) || ($month == 2 && $day > 28 && $arr[3] % 4 != 0)) {
		echo "Wrong Format\n";
		return ;
	}
	if ($arr[3] % 4 == 0 && $day > 29) {
		echo "Wrong Format\n";
		return ;
	}
	if ($valid != 8) {
		echo "Wrong Format\n";
		return ;
	}
	$date = mktime($time[0], $time[1], $time[2], $month, $day, $arr[3]);
	echo "$date\n";
?>
