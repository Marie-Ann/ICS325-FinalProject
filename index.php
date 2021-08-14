<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" width="device-width" , initial-scale="1.0">
    <title>Nerdvana Social Club</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="heading">
        <h1>Nerdvana Social Club</h1>
    </div>
    <!--Creates a menu bar with two dropdown links.-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="menu">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about.html" id="navbardrop" data-toggle="dropdown">About
                        Us</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="leadership.php">Leadership Team</a>
                        <a class="dropdown-item" href="we.php">Who We Are</a>
                        <a class="dropdown-item" href="#">Past Events</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="photo.php">Photo Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up!</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Log In</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">Member Sign-in</a>
                        
                    </div>
                </li>
            </ul>
        </div>
    </nav>


</body>

</html>