<?php
    session_start();

    $account = unserialize(file_get_contents("private/users.csv"));
	if ($account) {
		foreach ($account as $key => $user) {
			if ($_SESSION["logged_on_user"] == $user["login"]) {
				unset($account[$key]);
				$_SESSION["logged_on_user"] = "";
			}
		}
		file_put_contents("private/users.csv", serialize($account));
		header("Location: login.php?acc_deleted");
	}
	else {
		header("Location: index.php?acc=0");
	}
?>
