<?php
include('../controller/authController.php');
if (!empty($user)) {
    echo header('Location: index.php');
}
if (isset($_SESSION["mess_regis"])) {
    echo '<p>' . $_SESSION["mess_regis"] . '</p>';
    unset($_SESSION["mess_regis"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <form action="../controller/registerController.php" method="POST">
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <input type="password" name="reenterPassword" placeholder="re-enter password">
        <input type="radio" name="rememberPassword" /> Remember me?
        <input type="submit" name="submit" />
    </form>
    <p>Already have an account? <a href="./login.php">Login</a></p>
</body>

</html>