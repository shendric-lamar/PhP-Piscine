<?php
    if ($_POST["login"] && $_POST["oldpw"] != "" && $_POST["oldpw"] != "" && $_POST["submit"] == "OK") {
        $users_db = unserialize(file_get_contents("../private/passwd"));
        $flag = false;
        foreach ($users_db as $key => $user) {
            if($user["login"] == $_POST["login"] && $user["passwd"] == password_hash($_POST["oldpw"], PASSWORD_DEFAULT)) {
                $user["passwd"] == password_hash($_POST["passwd"], PASSWORD_DEFAULT);
                $flag = true;
            }
        }
        if ($flag == true) {
            file_put_contents("../private/passwd", serialize($users_db));
            echo "OK\n";
        }
        else {
            echo "ERROR\n";
            return ;
        }
    }
    else {
        echo "ERROR\n";
        return ;
    }
?>
