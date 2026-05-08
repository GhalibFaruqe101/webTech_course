<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "practise";
$conn = "";
try {
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    echo "connected successfully";
} catch (mysqli_sql_exception) {
    echo "server down";
}



mysqli_close($conn)
    ?>