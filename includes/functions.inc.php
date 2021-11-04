<?php
#SIGNUP FUNCTIONS

#Test case for empty signup input
function emptySignupInput($username, $email, $pwd, $pwdRepeat) {
    $result = null;

    #RETURNS: true if any of the signup fields are empty
    if (empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
    $result = false;
    }
    return $result;
}

#Test case for invalid password input
function invalidUsername($username) {
    $result = null;

    #RETURNS: true if password is invalid
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

#Test case for invalid email input
function invalidEmail($email) {
    $result = null;

    #RETURNS: true if email is invalid
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

#Test case for matching passwords on the signup page
function pwdDoesntMatch($pwd, $pwdRepeat) {
    $result = null;

    #RETURNS: true if password doesn't match
    if($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

#Checks if a username or email address exists in the db
function eitherExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailure");
        exit();   
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $stmtResult = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($stmtResult)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

#Check if a username exists in the db
function usernameExists($conn, $username) {
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailure");
        exit();   
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
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

#Checks if an email address exists in the db
function emailUsed($conn, $email) {
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailure");
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

#Uploads user info to db. Effectively creating a user.
function createUser($conn, $email, $username, $pwd) {
    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailure");
        exit();   
    }

    #Password is hashed before going to db for security.
    $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $email, $hashpwd, $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../login.php?error=none");
    exit();
}

#LOGIN FUNCTIONS

#Test case for empty login input
function emptyLoginInput($username, $pwd) {
    $result = null;

    #RETURNS: true if any login feilds are empty.
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
    $result = false;
    }
    return $result;
}

#Verifies user information and statrs a new session for the user.
function loginUser($conn, $username, $pwd) {
    $loginExists = eitherExists($conn, $username, $username);

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
        $_SESSION["username"] = $loginExists["username"];
        header("location: ../editor.php");
        exit();
    }
}
