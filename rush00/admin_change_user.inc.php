<?php
	if ($_POST["oldlogin"] && $_POST["newlogin"] && $_POST["oldpwd"] && $_POST["newpwd"]) {
		$account = unserialize(file_get_contents("private/users.csv"));
		if ($account) {
			$exist = 0;
			foreach ($account as $k => $v) {
				if ($_POST["oldlogin"] == $v["login"] && hash('whirlpool', $_POST["oldpwd"]) == $v["passwd"]) {
					$exist = 1;
					$account[$k]["passwd"] = hash('whirlpool', $_POST["newpwd"]);
					$account[$k]["login"] = $_POST["newlogin"];
				}
			}
			if ($exist) {
				file_put_contents("private/users.csv", serialize($account));
				echo "OK\n";
				header("Location: admin.php?user=modified");
			}
			else {
				echo "ERROR\n";
				header("Location: admin_change_user.php?error=unf");
			}
		}
		else
			echo "ERROR\n";
	}
	else {
		echo "ERROR\n";
		header("Location: admin_change_user.php?error=flb");
	}
?>
