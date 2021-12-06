<?php
/**
 * Contains all PHP functions used by the server
 */

/**
 * ErrorCheck - looks for empty input in the signup fields
 * @param email - users email from the email input field
 * @param pwd - password entered in the password input field
 * @param pwdRepeat - the repeat password entered in the second password input field
 */
function emptySingupInput($email, $pwd, $pwdRepeat) {
    $result;

    if (empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
    $result = false;
    }
    return $result;
}

/**
 * ErrorCheck - looks for invalid email
 * Verifies: using FILTER_VALIDATE_EMAIL which has similar formatting checks to RFC 822
 * @param email - users email from the email input field
 */
function invalidEmail($email) {
    $result;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

/**
 * ErrorCheck - looks for a mismatch in the entered passwords
 * @param pwd -
 * @param pwdRepeat -
 */
function pwdDoesntMatch($pwd, $pwdRepeat) {
    $result;

    if($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emailUsed($conn, $email) {
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailure");
        exit();   
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $stmtResult = mysqli_stmt_get_result($stmt);

    if ($row =mysqli_fetch_assoc($stmtResult)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function createUser($conn, $email, $pwd) {
    $sql = "INSERT INTO users (password, email) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailure");
        exit();   
    }

    $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $hashpwd, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
function emptyLoginInput($email, $pwd) {
    $result;

    if (empty($email) || empty($pwd)) {
        $result = true;
    } else {
    $result = false;
    }
    return $result;
}

function checkRegCode($conn, $regCode) {
    $regLogin = emailUsed($conn, "regcode");

    $hashedRegCode = $regLogin["password"];
    $checkRegCode = password_verify($regCode, $hashedRegCode);

    return $checkRegCode;
}

function loginUser($conn, $email, $pwd) {
    $loginExists = emailUsed($conn, $email);

    if ($loginExists === false) {
        header("location: ../login.php?error=incorrectlogin");
        exit();
    } 

    $pwdHash = $loginExists["password"];
    $checkPwd = password_verify($pwd, $pwdHash);

    if ($checkPwd === false) {
        header("location: ../login.php?error=incorrectlogin");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userID"] = $loginExists["id"];
        $_SESSION["email"] = $loginExists["email"];
        createUserDir($_SESSION["userID"]);
        header("location: copySettings.inc.php");
        exit();
    }
}
function getUID($conn, $email) {
	   $sql = "SELECT id FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailure");
        exit();   
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $stmtResult = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($stmtResult);
    
    $uid = $row['id'];
    mysqli_stmt_close($stmt);
	return $uid;
	
}
function createUserDir($uid) {
    if(!file_exists("../userdata/$uid")) {
        if(!mkdir("../userdata/$uid")) {
            die("Failed to create user directory.");
        }
    }
}




function writeToFile($path, $toBeWritten, $uid) {
    $file = fopen($path,"w");
    fwrite($file, $toBeWritten);
    fclose($file);
}

