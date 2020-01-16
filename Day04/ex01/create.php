<?php
    if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] && $_POST["submit"] === "OK") {
        if (!file_exists("../private")) {
            mkdir("../private");
			chmod("../private", 0755);
        }
        if (!file_exists("../private/passwd")) {
            file_put_contents("../private/passwd", null);
			chmod("../private/passwd", 0755);
        }
        $account = unserialize(file_get_contents("../private/passwd"));
        if ($account) {
            foreach ($account as $u) {
                if ($u["login"] === $_POST["login"])
                    $exist = 1;
            }
        }
        if ($exist) {
            echo "ERROR\n";
        } else {
            $tmp["login"] = $_POST["login"];
            $tmp["passwd"] = hash("whirlpool", $_POST["passwd"]);
            $account[] = $tmp;
            file_put_contents("../private/passwd", serialize($account));
            echo "OK\n";
        }
    } else {
        echo "ERROR\n";
    }
?>
