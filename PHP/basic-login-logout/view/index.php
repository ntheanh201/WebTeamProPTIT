<?php
include('../controller/authController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>

<body>
    <?php if (empty($user)) {
        echo '<a href="./login.php">Login</a> or <a href="./register.php">Register</a>';
    } else {
        echo "Welcome back $user
            <br/> <a href='../controller/logout.php'>Logout</a>";
    }
    ?>

</body>

</html>