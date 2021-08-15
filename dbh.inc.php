<?php

    //This file will serve as a connection to our database, for login and sign in  

    $serverName = "localhost";
    $dBUserName = "root";
    $dBPass = "";
    $dBName = "nerdvana";

    $conn = new mysqli($serverName, $dBUserName, $dBPass, $dBName);

    //kill the connection if user cannot connect.
    if(!$conn){
        die("Cannot connect to database ".mysqli_connect_error);
    }



