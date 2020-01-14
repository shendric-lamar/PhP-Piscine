<?php
    if($_POST["login"] && $_POST["passwd"] != "" && $_POST["submit"] == "OK" ) {
        if (!file_exists("../private")) {
            mkdir ("../private");
        }
        $users_db = unserialize(file_get_contents("../private/passwd"));
        foreach ($users_db as $key => $user) {
            if($user["login"] == $_POST["login"]) {
                echo "ERROR\n";
                return ;
            }
        }
        $users_db[] = array("login" => $_POST["login"], "passwd" => password_hash($_POST["passwd"], PASSWORD_DEFAULT));
        file_put_contents("../private/passwd", serialize($users_db));
        echo "OK\n";
    }
    else {
        echo "ERROR\n";
        return ;
    }
?>
