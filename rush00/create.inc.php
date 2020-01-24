<?php
    if ($_POST["login"] && $_POST["passwd"] && $_POST["passwd-repeat"] && $_POST["passwd"] == $_POST["passwd-repeat"]) {
        if (!file_exists("private")) {
            mkdir("private");
			chmod("private", 0755);
        }
        if (!file_exists("private/users.csv")) {
            file_put_contents("private/users.csv", null);
			chmod("private/passwd.csv", 0755);
        }
        $account = unserialize(file_get_contents("private/users.csv"));
        if ($account) {
            foreach ($account as $u) {
                if ($u["login"] === $_POST["login"])
                    $exist = 1;
            }
        }
        if ($exist) {
			header("Location: create.php?error=uae");
            echo "ERROR\n";
        } else {
            $tmp["login"] = $_POST["login"];
            $tmp["passwd"] = hash("whirlpool", $_POST["passwd"]);
            $account[] = $tmp;
            file_put_contents("private/users.csv", serialize($account));
            echo "OK\n";
			if ($_GET['admin'] == "yes")
				header("Location: admin.php?user=created");
			else
				header("Location: login.php");
        }
    }
	if ($_POST["passwd"] != $_POST["passwd-repeat"]) {
		header("Location: create.php?error=pdm");
	}
	if (!$_POST["login"] || !$_POST["passwd"] || !$_POST["passwd-repeat"]) {
		header("Location: create.php?error=flb");
	}
?>
