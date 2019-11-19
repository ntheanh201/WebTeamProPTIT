<?php
$serverName = "localhost";
$username = "root";
$password = "root";
$database = "quanly";
$port = "8889";

$conn = new mysqli($serverName, $username, $password, $database, $port);

if ($conn->connect_error) {
    echo "Connect to database failed! <br/>";
}
