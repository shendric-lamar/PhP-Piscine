<?php
	$account = unserialize(file_get_contents("private/users.csv"));
	$exist = 0;
	foreach ($account as $k => $u) {
		if ($_POST["login"] == $u["login"]) {
			$account[$k]["login"] = '';
			$account[$k]["passwd"] = '';
			$exist = 1;
		}
	}
	if ($exist == 0) {
		header("Location: admin_delete_user.php?user=notfound");
	}
	else {
		file_put_contents("private/users.csv", serialize($account));
		header("Location: admin.php?user=deleted");
	}
?>
