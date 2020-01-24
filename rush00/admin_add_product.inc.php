<?php
	if ($_POST["name"] == '' || $_POST["category"] == '' || $_POST["type"] == '' || $_POST["image"] == '' || $_POST["description"] == '' || $_POST["price"] == '')
		header("Location: admin_add_product.php?error=flb");
	else {
		$txt = "\n" . $_POST["name"] . ";" . $_POST["category"] . ";" . $_POST["type"] . ";" . $_POST["image"] . " ;" . $_POST["description"] . ";" . $_POST["price"];
		if (!file_put_contents('products.csv', $txt.PHP_EOL , FILE_APPEND | LOCK_EX))
			header("Location: admin_add_product.php?error=ueo");
		else
			header("Location: admin.php?msg=pa");
		}
