<?php
    //function to test whether a user ID is invalid.
    function invalidUID($username){
        $userResult;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            $userResult = true;
        }else{
            $userResult = false;
        }
        return $userResult;
    }
    //function to test whether email is invalid.
    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    //function to test whether a password matches.
    function passMatch($pwd, $repeat){
        $result;
        if($pwd !== $repeat){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    //function to test for a valid password.
    function invalidPass($pwd){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $pwd)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    //test whether a username already exists.
    function userExists($conn, $username){
        $sql = "SELECT * FROM member WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location ../signup.php?error=somethingwentwrong"); //takes user back to sign in if something can't found in DB.
            exit;
        }
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        
        $data = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($data)){
            return $row;
        }else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }
    //furction to create a new user.
    function createUser($conn, $username, $pwd, $email){
        $sql = "INSERT INTO member(username, password, email) VALUES (?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=somethingwentwrong"); //takes user back to sign in if something can't found in DB.
            exit();
        }

        $hashPass = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $username, $hashPass, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        //takes user back to sign up page upon completion.
        header("location: ../signup.php?error=none");
        exit();

        
    }
    
    function loginUser($conn, $username, $pwd){
        $uidExists = userExists($conn, $username);

        if($uidExist === false){
            header("location: ../login.php?error=incorrectlogin");
            exit();
        }

        $passHash = $uidExists["password"];
        $checkPass = password_verify($pwd, $passHash);

        if($checkPass === false){
            header("location: ../login.php?error=incorrectpassword");
            exit();
        }
        else if($checkPass === true){
            session_start();
            $_SESSION["userid"] = $uidExists["username"];
            $_SESSION["u_id"] = $uidExists["username"];
            header("location: ../php/userprofile.php");
            exit();
        }
    }