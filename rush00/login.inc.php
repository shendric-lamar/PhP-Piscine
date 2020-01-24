
<?php
    require_once('auth.php');

    session_start();
	if ($_GET['msg'] == "rename-basket") {
		rename("private/basket/.csv", "private/basket/".$_POST['login'].".csv");
	}
    if ($_POST['login'] && $_POST['passwd'] && auth($_POST['login'], $_POST['passwd'])){
		if ($_POST['login'] == "shendric" || $_POST['login'] == "auguitar")
			$_SESSION["logged_on_user"] = "admin";
		else
        	$_SESSION['logged_on_user'] = $_POST['login'];
        echo "OK\n";
		header("Location: index.php");
    } else {
        $_SESSION['logged_on_user'] = "";
        echo "ERROR\n";
		header("Location: login.php?error=unf");
    }
