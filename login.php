<?php
    session_start();
    include_once "includes/dbh.inc.php";

?>
<head>
    <title>Member Log In</title>
    <meta name="viewport" width="device-width" , initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="form-style.css">
    <link rel="stylesheet" type="text/css" href="pages.css">
</head>
<body>
    <div class="heading">
        <h1>Welcome Members</h1>
        <h3><a href="index.php">Home&#9774</a></h3>
    </div>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="user" placeholder="username..."><br>
        <input type="password" name="pwd" placeholder="password..."><br>
        <button type="submit" name="submit-login">Log In!</button>
    </form>

</body>





    