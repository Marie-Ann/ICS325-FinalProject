<?php
    if(isset($_POST["submit"])){
        $username = $_POST["user"];
        $pass = $_POST["pwd"];

        require_once "includes/dbh.inc.php";
        require_once "includes/function.inc.php";

        if(empty($username) || empty($pwd)){
            header("location: ../login.php?error=emptyinput");
            exit;
        }

        loginUser($conn, $username, $pwd);
    }
    else{
        header("location: ../login.php");
        exit();
    }