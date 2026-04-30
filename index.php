<!DOCTYPE html>

<head>
    <title>
        This is php a server
    </title>
</head>

<body>
    <form action="msg.php" method="post">
        Name:<input type="text" name="name"><br>
        E-mail:<input type="text" name="email_id"><br>
        <input type="submit">

    </form>
    <?php
    echo ("Hello world");
    echo "";

    ?>
    <br>
</body>

</html>

<html>

<body>
    <br>
    hey <?php $_GET["get_name"] ?><br>
    and your email <?php echo $_GET["get_email"] ?>
</body>

</html>