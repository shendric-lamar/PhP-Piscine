<?php
	session_start();

	if ($_SESSION['logged_on_user'] != '') {
		$user = $_SESSION['logged_on_user'];
		if (!file_exists("private/archive")) {
			mkdir("private/archive");
			chmod("private/archive", 0755);
		}
		rename("private/basket/$user.csv", "private/archive/$user.csv");
		header("Location: validated.php");
	}
	else {
		header("Location: login.php?error=validate-account");
	}
