<?php
	if ($_POST["login"] && $_POST["oldpwd"] && $_POST["newpwd"]) {
		$account = unserialize(file_get_contents("private/users.csv"));
		if ($account) {
			$exist = 0;
			foreach ($account as $k => $v) {
				if ($_POST["login"] == $v["login"] && hash('whirlpool', $_POST["oldpwd"]) == $v["passwd"]) {
					$exist = 1;
					$account[$k]["passwd"] = hash('whirlpool', $_POST["newpwd"]);
				}
			}
			if ($exist) {
				file_put_contents("private/users.csv", serialize($account));
				echo "OK\n";
				header("Location: index.php");
			}
			else {
				echo "ERROR\n";
				header("Location: modify.php?error=unf");
			}
		}
		else
			echo "ERROR\n";
	}
	else {
		echo "ERROR\n";
		header("Location: modify.php?error=flb");
	}
?>
