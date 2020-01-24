<?php
    $tab = $_GET;
    if ($tab["action"]) {
        if ($tab["action"] == "set" && $tab["name"] != '' && $tab["value"] != '') {
            setcookie($tab["name"], $tab["value"], time() + (60*60*24*30));
        }
        if ($tab["action"] == "get" && $tab["name"] != '') {
            $name = $tab["name"];
            if ($_COOKIE[$name]) {
                echo "$_COOKIE[$name]\n";
            }
        }
        if ($tab["action"] == "del" && $tab["name"] != '') {
            setcookie($tab["name"], "");
        }
    }
?>
