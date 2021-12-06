<?php
if (isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["repassword"];
    $regCode = $_POST["regcode"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptySingupInput($email, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdDoesntMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordmismatch");
        exit();
    }

    if(emailUsed($conn, $email) !== false) {
        header("location: ../signup.php?error=emailtaken");
        exit(); 
    }

    if(!checkRegCode($conn, $regCode)) {
        header("location: ../signup.php?error=invalidregcode");
        exit(); 
    }

    createUser($conn, $email, $pwd);
    $uid = getUID($conn, $email);
    createUserDir($uid);
    header("location: ../login.php?error=none");
    exit();



} else {
    header("location: ../signup.php?error=redirecterror");
    exit();
}