<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (loginVazio($email, $password) !== false){
        header("location: ../login.php?error=camposvazios");
        exit();
    }

    loginUser($conn, $email, $password);
}
else {
    header("location: ../system.php");
    exit();
}
?>