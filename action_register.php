<?php
include ("includes/header.php");

if (isset($_POST['name'])  && !empty($_POST['name']) &&
    isset($_POST['family']) && !empty($_POST['family']) &&
    isset($_POST['national_code']) && !empty($_POST['national_code']) &&
    isset($_POST['phone']) && !empty($_POST['phone']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['confirm_password']) && !empty($_POST['confirm_password']))
{
    $name = $_POST['name'];
    $family = $_POST['family'];
    $national_code = $_POST['national_code'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
}
else
    exit("برخی از فیلد ها خالی مانده است.");

if ($password != $confirm_password)
    exit("گدرواژه و تکرار آن یکسان نیستند.");


$link = mysqli_connect("localhost", "root", "", "dental_clinic");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "INSERT INTO `patient`(`name`, `family`, `national_code`, `phone`, `password`) VALUES ('$name','$family','$national_code','$phone','$password')";

if (mysqli_query($link, $query) === true)
    echo ("<p style='color:green;' class='information'><b>" . $name . " " . $family .
        " گرامی عضويت شما در دندانپزشکی رجایی با موفقیت انجام شد.<br>از <a href='login.php'> اینجا </a>می توانید وارد شوید." . "</b></p><br>");
else
    echo ("<p style='color:red;' class='information'><b>عضويت شما در دندانپزشکی انجام نشد<b></p>");

mysqli_close($link);

include ("includes/footer.php");
?>
