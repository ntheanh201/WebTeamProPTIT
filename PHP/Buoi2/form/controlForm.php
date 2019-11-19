<?php
session_start();
// isset($_GET["user"]) ? $user = $_GET["user"] : $user = "";
// isset($_GET["message"]) ? $message = $_GET["message"] : $message = "";
// isset($_GET["password"]) ? $pass = $_GET["password"] : $pass = "";

isset($_POST["user"]) ? $user = $_POST["user"] : $user = "";
isset($_POST["message"]) ? $message = $_POST["message"] : $message = "";
isset($_POST["password"]) ? $pass = $_POST["password"] : $pass = "";

echo "User: " . $user . " - Message: " . $message . " - Pass: " . $pass . "<br>";

if ($user === "admin" && $pass === "123456") {
    $_SESSION["login"] = true;
    $_SESSION["user"] = $user;
    echo header('Location: ../homeView.php');
    echo $message;
} else {
    header('Location: index.html');
}
