<head>
        <meta charset="UTF-8"> 
        <meta name="viewport" width="device-width" initial-scale="1.0">
        <link rel="stylesheet" type="text/css" href="form-style.css">
        <link rel="stylesheet" type="text/css" href="pages.css">
        <title>Join the Community!</title>
    </head>
    <body>
        <div class="heading">
            <h1>Join the Community!</h1>
            <h3><a href="index.php">Home&#9774</a></h3>
        </div>
        <form action="includes/sign-up.inc.php" method="post">
            <input type="text" name="fname" placeholder="First Name..."><br>
            <input type="text" name="lname" placeholder="Last Name..."><br>
            <input type="text" name="username" placeholder="username..."><br>
            <input type="text" name="email" placeholder="Email..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <input type="password" name="re-pwd" placeholder="Re-Type Password..."><br>
            <button type="submit" name="submit">Join Now</button>
        </form>
      
    </body>

   
    <?php 
    
    if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p>You did not complete all fields.</p>";
    }
    else if($_GET["error"] == "invalidusername"){
        echo "<p>Choose a valid username.</p>";
    }
    else if($_GET["error"] == "invalidemail"){
        echo "<p>Invalid email address</p>";
    }
    else if($_GET["error"] == "invalidpassword"){
        echo "<p>Please pick a valid password.</p>";
    }
    else if($_GET["error"] == "passwordsdonotmatch"){
        echo "<p>Your passwords don't match.</p>";
    }
    else if($_GET["error"] == "useralreadyexists"){
        echo "<p>This username is already taken.</p>";
    }
    else if($_GET["error"] == "none"){
        echo "<p>Success! You are now signed up!</p>";
    }
};?>
    



    