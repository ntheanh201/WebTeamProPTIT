<?php
session_start();
include("../model/sqlConnector.php");
include("../model/accountDAO.php");

if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    if (checkAccount($user, $pass)) {
        $_SESSION["login"] = true;
        $_SESSION["username"] = $user;
        $_SESSION["mess_login"] = "Login successfully";
        echo header('Location: ../index.php');
    } else {
        $message = "Wrong username or password";
        $_SESSION["mess_login"] = $message;
        echo header('Location: ../view/login.php');
    }
} else {
    $message = "Please insert username and password";
    $_SESSION["mess_login"] = $message;
    echo header('Location: ../view/login.php');
}
