<?php
session_start();
if (isset($_SESSION["login"])) {
    $_SESSION["login"] = false;
    echo $_SESSION["login"];
}
echo header('Location: ./form/index.html');
