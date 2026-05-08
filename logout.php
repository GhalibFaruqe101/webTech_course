<?php

session_start();
setcookie("username", time() - 3600);
if (!isset($_COOKIE["username"])) {
    echo "no cookies";
}



session_destroy();
echo "session ends!";

?>