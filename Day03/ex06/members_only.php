<?php
	if ($_SERVER['PHP_AUTH_USER'] == 'zaz' &&
	$_SERVER['PHP_AUTH_PW'] == 'ilovemylittleponey') {
		$pic = base64_encode(file_get_contents("../img/42.png"));
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
		echo ($pic);
		echo "'>\n</body></html>\n";
	}
	else {
		header('WWW-Authenticate: Basic realm="My Realm"');
		header('HTTP/1.0 401 Unauthorized');
		echo "<html><body>This area is only accessible to members</body></html>\n";
	}
?>
