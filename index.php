<!DOCTYPE html>

<head>
    <title>
        This is php a server
    </title>
</head>

<body>
    <form action="msg.php" method="post">
        Name:<input type="text" name="name"><br>
        E-mail:<input type="email" name="email_id"><br>
        <input type="submit">

    </form>
    <?php
    echo "Hello world";
    ?>
</body>

</html>