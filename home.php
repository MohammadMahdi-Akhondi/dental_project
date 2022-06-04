<?php
include ("includes/header.php");

$link = mysqli_connect("localhost", "root", "", "dental_clinic");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM dentist";

$result = mysqli_query($link, $query);

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
<?php
if (!(isset($_SESSION["logged"]) && $_SESSION["logged"] === true))
{
    ?>
    <div class="alert alert-warning mt-3" role="alert">
    توجه: برای رزرو نوبت باید <a href="login.php">وارد حساب</a>  شوید.
    </div>
    <?php
}
?>
<h3 id="introduction">معرفی پزشکان</h3>

<?php
$counter = 0;
while ($row = mysqli_fetch_array($result))
{
?>

<?php
if ($counter != 0){
    echo "<hr>";
}
if ($counter % 2 == 0)
{
?>

<div class="row profile">
    <div class="col">
        <img src="img/dentist1.jpg" alt="avatar" width="250px" class="photos">
    </div>
    <div class="col info">
        <p>نام : <?php echo ($row['name'])?></p>
        <p>نام خانوادگی : <?php echo ($row['family'])?></p>
        <p>جنسیت : <?php if ($row['gender']=='m') echo "مرد"; else echo "زن";?></p>
        <p>سابقه : <?php echo ($row['experience'])?> سال</p>
        <p>شماره همراه : <?php echo ($row['phone'])?></p>
    </div>
</div>

    <?php
}
else
{
    ?>

<div class="row profile">
    <div class="col info">
        <p>نام : <?php echo ($row['name'])?></p>
        <p>نام خانوادگی : <?php echo ($row['family'])?></p>
        <p>جنسیت : <?php if ($row['gender']=='m') echo "مرد"; else echo "زن";?></p>
        <p>سابقه : <?php echo ($row['experience'])?> سال</p>
        <p>شماره همراه : <?php echo ($row['phone'])?></p>
    </div>
    <div class="col">
        <img src="img/dentist2.png" alt="avatar" width="250px" class="photos">
    </div>
</div>
    <?php
}
    $counter++;
}
    ?>

<?php
include ("includes/footer.php");
?>