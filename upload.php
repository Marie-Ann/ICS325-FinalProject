<?php
    session_start();
    include_once "includes/dbh.inc.php";
    //references current session id
    $id = $_SESSION['id'];

    //source for code can be found here: https://www.youtube.com/watch?v=JaRq73y5MJk&t=318s.
    if(isset($_POST['submit'])){
        $image = $_FILES['picture'];

        $filename = $_FILES['picture']['name'];
        $filetmp = $_FILES['picture']['tmp_name'];
        $filesize = $_FILES['picture']['size'];
        $fileerror = $_FILES['picture']['error'];
        $filetype = $_FILES['picture']['type'];

        $ext = explode(".", $filename);
        $actualtext = strtolower(end($ext));


        $typeallowed = array('jpg', 'jpeg', 'png');
        if(in_array($actualtext, $typeallowed)){
            if($fileerror === 0){
                if($filesize < 5000000){
                        $newfilename = "profile". $id .".".$actualtext;
                        $destination = 'uploads/'.$newfilename;
                        move_uploaded_file($filetmp,  $destination);
                     echo "Image has been uploaded successfully.";
                    
                }else{
                    echo "Image is too large";
                }
            }else{
                echo "Your image cannot be uploaded.";
            }
        }else{
            echo "This image type is not allowed.";
        }
    }