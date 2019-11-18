<?php

include '../db_connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($link, "INSERT INTO accounts (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')");
header('location: ../index.php');
