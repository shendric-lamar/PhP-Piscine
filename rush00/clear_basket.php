<?php
	session_start();
	unlink("private/basket/".$_SESSION['logged_on_user'].".csv");
	header("Location: basket.php?basket=empty");
