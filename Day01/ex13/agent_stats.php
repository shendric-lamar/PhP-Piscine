<?php
	if ($argc != 2)
		return (0);
	$arr = file('php://stdin');
	unset($arr[0]);

	if ($argv[1] == "average") {
		$grade = 0;
		$count = 0;
		foreach ($arr as $elem) {
			$temp = explode(";", $elem);
			if ($temp[1] != '' && $temp[2] != "moulinette") {
				$grade += $temp[1];
				$count++;
			}
		}
		if ($count > 0) {
			$res = $grade / $count;
			echo "result: $res\n";
		}
	}
	if ($argv[1] == "average_user") {
		sort($arr);
		$i = 0;
		$size = count($arr);
		while ($i < $size) {
			$total = 0;
			$count = 0;
			$line = explode(";", $arr[$i]);
			$len = strlen($line[0]);
			while ($i < $size && $line[0] == substr($arr[$i], 0, $len)) {
				$temp = explode(";", $arr[$i]);
				if ($temp[1] != "") {
					$total += $temp[1];
					$count++;
				}
				$i++;
			}
			if ($count > 0) {
				$res = $total / $count;
				echo "$line[0]:$res\n";
			}
		}
	}
		if ($argv[1] == "moulinette_variance") {
			sort($arr);
			$i = 0;
			$size = count($arr);
			while ($i < $size) {
				$total = 0;
				$count = 0;
				$mouli = 0;
				$line = explode(";", $arr[$i]);
				$len = strlen($line[0]);
				while ($i < $size && $line[0] == substr($arr[$i], 0, $len)) {
					$temp = explode(";", $arr[$i]);
					if ($temp[3] != "" && $temp[2] != "moulinette") {
						$total += (int)$temp[3];
						$count++;
					}
					if ($temp[2] == "moulinette")
						$mouli = (int)$temp[3];
					$i++;
				}
				if ($count > 0) {
					$res = ($total / $count) - $mouli;
					echo "$line[0]:$res\n";
				}
			}
		}
?>
