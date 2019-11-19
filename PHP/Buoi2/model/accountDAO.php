<?php

function insertAccount($username, $password)
{
    global $conn;
    $sql = "INSERT INTO tblaccount(username, password) VALUES ('" . $username . "', '" . $password . "')";
    echo $sql;
    $val = $conn->query($sql);
    if ($val == TRUE) {
        echo "insert successfully";
    } else {
        echo "Insert failed" . "<br>";
    }
}

//Tạo 1 trang đăng ký tài khoản
//Đăng nhập kh đúng -> Có mún đăng ký hay không?
//Chính xác thì cho đăng nhập luôn setLogin = true, logout 
