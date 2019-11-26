<?php
include('../controller/authController.php');
if (!empty($user)) {
    echo header('Location: index.php');
}
if (isset($_SESSION["mess_login"])) {
    echo '<p>' . $_SESSION["mess_login"] . '</p>';
    unset($_SESSION["mess_login"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form action="../controller/loginController.php" method="POST">
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <input type="radio" name="rememberPassword" />
        <input type="submit" name="submit" />
    </form>
    <p> Don't have an account? <a href="./register.php">Register</p>
    </p>
</body>

</html>