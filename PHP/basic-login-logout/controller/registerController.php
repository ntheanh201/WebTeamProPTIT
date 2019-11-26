<?php
session_start();
include("../model/sqlConnector.php");
include("../model/accountDAO.php");

if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    if (insertAccount($user, $pass)) {
        $_SESSION["mess_login"] = "Register successfully. Please login.";
        echo header('Location: ../view/login.php');
    } else {
        $_SESSION["mess_regis"] = "FAILED";
        echo header('Location: ../view/register.php');
    }
} else {
    $message = "Please insert your username and password";
    $_SESSION["mess_regis"] = $message;
    echo header('Location: ../view/register.php');
}
