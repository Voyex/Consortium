<?php

if(isset($_POST["submit"])) {
    session_start();

    $email = $_SESSION['email'];

    $oldPWD = $_POST["oldpassword"];
    $pwd = $_POST["password"];
    $rePWD = $_POST["repassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (pwdDoesntMatch($pwd, $rePWD)) {
        header("location: ../recovery.php?error=pwddoesnotmatch");
        exit();
    } 
    if(!verifyPassword($conn, $oldPWD, $email)) {
        header("location: ../recovery.php?error=incorrectpassword");
        exit();
    }

    #Changes the password
    changePassword($conn, $pwd, $email);
    header("location: ../index.php?error=none");

} else {
    header("location: ../index.php?error=nah");
    exit();
}