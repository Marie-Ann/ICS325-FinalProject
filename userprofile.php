<?php
    session_start();
    include_once "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<head>
        <meta name="viewport" width="device-width" initial-scale="1.0">
        <link rel="stylesheet" type="text/css" href="pages.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>User Profile</title>
    </head>
    <body>
        <div class="heading">
            <h1>User Name</h1>
        </div>
        <div class="content" style="padding:50px;">
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <table style="border: none; padding: 10px 15px;">
        <tr><td><img src="images/Portrait_Placeholder.PNG" width="200" height="200"></td>
            <td><input type="file" name="picture" id="picture"></td>
            <td><button type="submit" name="uploadpic" style="background-color: #7C37C6; color: #fff; border: none; padding: 10px 15px;">Upload Image</button></td></tr>
        </form>
    </table>
    <form class="row g-3">
        <div class="col">
            <input type="text" name="fname" class="form-control" placeholder="First Name..." aria-label="First Name">
        </div>
        <div class="col">
            <input type="text" name="lname" class="form-control" placeholder="Last Name..." aria-label="Last Name">
        </div>
        <div class="col-md-2">
            <input type="text" name="birthday" class="form-control" placeholder="Birthday..." aria-label="Birthday">
        </div>
        <div class="input-group" style="padding: 20px;">
            <textarea name="bio" class="form-control" aria-label="Bio...">Bio...</textarea>
        </div>
        <div class="input-group" style="padding: 20px;">
            <textarea name="interests" class="form-control" aria-label="Interests...">Hobbies or interests...</textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="submit" style="background-color: #7C37C6; border: none;">Submit Profile</button>
        </div>
    </div>
    </form>
        <p style="font-family: Arial; padding-left: 50px;">My Scheduled Events:</p>
      
        <form action="logout.php" method="post" style="padding: 50px;">
            <button type="submit" name="signoff" style="background-color: #7C37C6; color: #fff; border: none; padding: 10px 15px;">Sign Out</button>
        </form>
        </div>
        <!--button to open modal-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#schedule-event" style="background-color: #7C37C6; border: none;">
            Create a New Event</button>
        <div class="modal" id="schedule-event">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create a New Event</h4>
        </div>
        <div class="modal-body">
            <form method="POST">
                <input type="text" name="event-name" placeholder="Name of Event"><br>
                <input type="text" name="address" placeholder="Address"><br>
                <input type="text" name="date" placeholder="Date of Event"><br>
            </form>
            </div>
        <div class="modal-footer">
            <button type="button" name="exit" class="btn btn-secondary" data-dismiss="modal">Exit</button>
            <button type="button" name="create-event" class="btn btn-primary">Create Event</button>
        </div>
    </div>
</div>
</div>
</div>



    </body>
    <?php 
        //creates our form variables to post to the database.
        $fname = $_POST['fname'] ?? "";
        $lname = $_POST['lname'] ?? "";
        $birthday = $_POST['birthday'] ?? "";
        $bio = $_POST['bio'] ?? "";
        $interests = $_POST['interests'] ?? "";

        $sql = "INSERT INTO member_profile(firstname, lastname, birthdate, bio, interests) VALUES ('$fname','$lname','$birthday','$bio','$interests');";
        $results = mysqli_query($conn, $sql);
        
    ?>
 