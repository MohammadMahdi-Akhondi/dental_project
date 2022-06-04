<?php
include ("includes/header.php");

if ((isset($_POST['national_code']) && !empty($_POST['national_code'])
    && isset($_POST['password']) && !empty($_POST['password']))) {

    $national_code = $_POST['national_code'];
    $password = $_POST['password'];
}
else
    exit("برخی از فیلد ها خالی مانده است.");

$link = mysqli_connect("localhost", "root", "", "dental_clinic");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM patient WHERE national_code='$national_code' AND password='$password'";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);

if ($row) {
    $name = $row['name'];
    $family = $row['family'];
    $_SESSION["logged"] = true;
    $_SESSION["full_name"] = $name." ".$family;
    $_SESSION["national_code"] = $row['national_code'];

    echo ("<p style='color:green;' class='information'><b>".$name." ".$family." گرامی به دندانپزشکی رجایی خوش آمدید.<b><br>برای رزرو نوبت از <a href='book_turn.php'>اینجا </a>اقدام کنید</p>");} else
    echo ("<p style='color:red;'><b>نام كاربري يا كلمه عبور يافت نشد</b></p>");


mysqli_close($link);

include ("includes/footer.php");
?>
