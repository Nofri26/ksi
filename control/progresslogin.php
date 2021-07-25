<?php
session_start();
require("../connection.php");

// data from form
$passwordForm = $_POST['password'];
$usernameForm = $_POST['username'];
//query cek username dan password sekaligus fetch array
$result = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM users WHERE username = '$usernameForm' AND password = '$passwordForm'"));

if ($result) { //ketika username dan password benar
    $sessiondata = [
        'isLoggedIn' => TRUE,
        'username' => $result['username'],
        'phonenumber' => $result['phonenumber'],
        'fullname' => $result['fullname']
    ];
    $_SESSION = $sessiondata;
    header("Location: ../admin.php");
    die();
} else { //ketika username dan password salah
    header("Location: ../login.php");
    die();
}
