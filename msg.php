<html>

<body>
    welcome to the page <?php echo $_POST["name"]; ?><br>
    We will be touch with you via your mail <?php echo $_POST["email_id"]; ?>
</body>

</html>
<html>

<body>
    <form action="index.php" method="get">
        Hey what's your name:<input type="text" name="get_name"><br>
        and your emai:<input type="text" name="get_email"><br>
        <input type="submit">

    </form>
</body>

</html>