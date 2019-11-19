<?php
include("../model/sqlConnector.php");
include("../model/accountDAO.php");

if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    insertAccount($user, $pass);
} else {
    $message = "Please insert your username and password";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
