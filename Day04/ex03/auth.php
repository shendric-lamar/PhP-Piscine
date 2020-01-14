<?php
    function auth($login, $passwd) {
        if (!$login || !$passwd)
            return (FALSE);
        else {
            $user_db = unserialize(file_get_contents("../private/passwd"));
            if ($user_db) {
                foreach ($user_db as $key => $user) {
                    if ($user["login"] == $login && $user["passwd"] == hash('whirlpool', $passwd))
                        return (TRUE);
                    else
                        return (FALSE);
                }
            }
            else
                return (FALSE);
        }
    }
