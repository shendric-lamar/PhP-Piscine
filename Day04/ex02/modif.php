<?php
	if ($_POST["login"] && $_POST["oldpwd"] && $_POST["newpwd"] && $_POST["submit"] && $_POST["submit"] == "OK") {
		$account = unserialize(file_get_contents("../private/passwd"));
		if ($account) {
			$exist = 0;
			foreach ($account as $k => $v) {
				if ($_POST["login"] == $v["login"] && hash('whirlpool', $_POST["oldpwd"]) == $v["passwd"]) {
					$exist = 1;
					$account[$k]["passwd"] = hash('whirlpool', $_POST["newpwd"]);
				}
			}
			if ($exist) {
				file_put_contents("../private/passwd", serialize($account));
				echo "OK\n";
			}
			else
				echo "ERROR\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
