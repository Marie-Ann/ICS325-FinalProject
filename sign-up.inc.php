<?php

    /*Code to verify new user credentials.*/
    if(isset($_REQUEST["submit"])){
        $user = $_POST["username"];
        $name = $_POST["fname"]; 
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $repeat = $_POST["re-pwd"];

        require_once "dbh.inc.php";
        require_once "function.inc.php";

        //tests whether a user input is empty, take  user back to the login page.
        if(empty($name) || empty($email) || empty($pwd) || empty($repeat)){
            header("location: ../signup.php?error=emptyinput");
            exit;
        }
        
        if(invalidUID($user) !== false){
            header("location: ../signup.php?error=invalidusername");
            exit;
        }

        //test whether an email is valid.
        if(invalidEmail($email) !== false){
            header("location: ../signup.php?error=invalidemail");
            exit;
        }
        //test whether a password is valid.
        if(invalidPass($pwd) !== false){
            header("location: ../signup.php?error=invalidpassword");
            exit;
        }
        //test whether passwords match.
        if(passMatch($pwd, $repeat) !== false){
            header("location: ../signup.php?error=passwordsdonotmatch");
        } 
        //test whether a user already exists.
        if(userExists($conn, $email) !== false){
            header("location: ../signup.php?error=useralreadyexists");
        }


        //create new user if user meets all criteria.
        createUser($conn, $user, $pwd, $email);
               
        } else{
            header("location: ../signup.php");

    }