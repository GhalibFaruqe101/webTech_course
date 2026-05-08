<?php
session_start();
$user_name = $_COOKIE['username'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a form</title>
</head>

<body>
    <form action="cookies.php" method="post"><br><br>
        Name:<input type="text" name="Name"><br><br>
        Age:<input type="number" name="Age"><br><br>
        UserName:<input type="text" name="UserName"><br><br>
        Password:<input type="password" name="Password"><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_SESSION['logged_in'])) {
        echo "Session is ON!";
    }
    ?>
    <br><br>

    <?php


    $_SESSION['user'] = "Test User";
    ?>

    <form action="logout.php" method="post">
        <button type="submit" name="end_session">
            logout
        </button>
    </form>






</body>

</html>