<?php
    include "includes/imageheader.php";
    

    echo '<!--image carousel-->
    <div id="image-carousel" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#image-carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#image-carousel2" data-slide-to="1" class="active"></li>
            <li data-target="#image-carousel3" data-slide-to="2" class="active"></li>
            <li data-target="#image-carousel4" data-slide-to="3" class="active"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/circle.jpg" width="875" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/tubing.jpg" width="875" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/duo.jpg" width="875" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/duo2.jpg" width="875" height="500">
            </div>
        </div>
        <a class="carousel-control-prev" href="#image-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#image-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</body>';
?>

