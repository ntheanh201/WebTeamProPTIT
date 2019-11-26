<?php
//model khong dung session

include("../sqlVariables.php");

function isExistAccount($username)
{
    global $conn;
    $sql = "SELECT * FROM $ACCOUNT_TABLE_NAME WHERE username = '" . $username . "'";
    $val = $conn->query($sql);
    if ($val->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function insertAccount($username, $password)
{
    if (!isExistAccount($username)) {
        global $conn;
        $sql = "INSERT INTO tblaccount(username, password) VALUES ('" . $username . "', '" . $password . "')";
        $val = $conn->query($sql);
        if ($val == TRUE) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function checkAccount($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM tblaccount WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $val = $conn->query($sql);
    if ($val->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function deleteAccount($username)
{
    global $conn;
    $sql = "";
}
