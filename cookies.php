<?php
session_start();
$username = $_POST['UserName'];
$name = $_POST['Name'];
$age = $_POST['Age'];
$password = $_POST['Password'];

setcookie("username", $username, time() + 3600);

$_SESSION['logged_in'] = true;
$_SESSION['UserName'] = $username;

$data = "Name: $name | UserName: $username | Age: $age" . PHP_EOL;
file_put_contents("data.txt", $data, FILE_APPEND);
?>