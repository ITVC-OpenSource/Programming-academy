<?php
include(__DIR__ . "/../config.php");
if (isset($_GET['u']) AND isset($_GET['p'])) {
    $res = $PDO->query("SELECT * FROM `users` WHERE `uname` = '" . $_GET['u'] . "' AND `passw` = '" . $_GET['p'] . "'");
    if ($res->rowCount() == 0 ) {
        echo "false";
    } else {
        echo "true";
    }
} else {
    echo "Bad request!";
}
?>