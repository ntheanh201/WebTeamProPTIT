<?php
session_start();
if (isset($_SESSION["login"]) && isset($_SESSION["username"])) {
    if ($_SESSION["login"]) {
        $user = $_SESSION["username"];
    } else $user = "";
}
