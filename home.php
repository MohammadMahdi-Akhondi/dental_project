<?php
include ("includes/header.php");
?>

<!-- slide show -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/dental2.jpg" class="d-block w-100" alt="dental photo1">
        </div>
        <div class="carousel-item">
            <img src="img/dental3.jpg" class="d-block w-100" alt="dental photo2">
        </div>
        <div class="carousel-item">
            <img src="img/dental1.jpg" class="d-block w-100" alt="dental photo3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- content -->
<h3 id="introduction">معرفی پزشکان</h3>

<div class="row profile">
    <div class="col">
        <img src="img/dentist1.jpg" alt="avatar" width="250px" class="photos">
    </div>
    <div class="col info">
        <p>نام : شاهین</p>
        <p>نام خانوادگی :  رفیعی</p>
        <p>مدرک : دندانپزشکی</p>
        <p>سابقه : ۵ سال</p>
    </div>
</div>
<hr>
<div class="row profile">
    <div class="col info">
        <p>نام : محمد</p>
        <p>نام خانوادگی :  ملکوتی</p>
        <p>مدرک : دندانپزشکی</p>
        <p>سابقه : ۸ سال</p>
    </div>
    <div class="col">
        <img src="img/dentist2.png" alt="avatar" width="250px" class="photos">
    </div>
</div>
<hr>
<div class="row profile">
    <div class="col">
        <img src="img/dentist1.jpg" alt="avatar" width="250px" class="photos">
    </div>
    <div class="col info">
        <p>نام : معید</p>
        <p>نام خانوادگی :  ذاکری</p>
        <p>مدرک : دندانپزشکی</p>
        <p>سابقه : ۳ سال</p>
    </div>
</div>

<?php

?>

<?php
include ("includes/footer.php");
?>