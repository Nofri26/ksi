<?php
require('../connection.php');

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$query_insert = mysqli_query($connect, "INSERT INTO guest (fullname,email,message)  
VALUES ('$fullname','$email', '$message')");
header("Location: ../index.php");
