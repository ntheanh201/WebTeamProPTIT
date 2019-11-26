<?php
session_start();
function insertAccount($username, $password)
{
    global $conn;
    $sql = "INSERT INTO tblaccount(username, password) VALUES ('" . $username . "', '" . $password . "')";
    $val = $conn->query($sql);
    if ($val == TRUE) {
        echo header('Location: ../view/login.php');
    } else {
        echo header('Location: ../view/register.php');
    }
}

function checkAccount($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM tblaccount WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $val = $conn->query($sql);
    if ($val->num_rows > 0) {
        echo header('Location: ../view/index.php');
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
    } else {
        $message = "Wrong username or password";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

function deleteAccount($username)
{
    global $conn;
    $sql = "";
}
