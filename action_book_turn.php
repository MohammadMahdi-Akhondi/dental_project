<?php
include ("includes/header.php");

if (!(isset($_SESSION["logged"]) && $_SESSION["logged"] === true)) {
    ?>
    <script type="text/javascript">
        location.replace("home.php");
    </script>
    <?php
}

if (isset($_POST['turn_id']) && !empty($_POST['turn_id']) &&
    isset($_POST['dentist_id']) && !empty($_POST['dentist_id']))
{
    $turn_id = $_POST['turn_id'];
    $dentist_id = $_POST['dentist_id'];
    $national_code = $_SESSION["national_code"];
}

else
    exit("برخی از فیلد ها خالی مانده است.");

$link = mysqli_connect("localhost", "root", "", "dental_clinic");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$patient_id_query = "SELECT id FROM patient WHERE national_code='$national_code'";
$patient = mysqli_query($link, $patient_id_query);
$patient_id = mysqli_fetch_array($patient)['id'];

$query = "INSERT INTO `turn`(`dentist_id`, `patient_id`, `turn_id`) VALUES ('$dentist_id','$patient_id','$turn_id')";

if (mysqli_query($link, $query))
    echo ("<p style='color:green;' class='information'><b>رزرو نوبت شما با موفقیت انجام شد.</b></p>");
else
    echo ("<p style='color:red;' class='information'><b>رزرو نوبت شما انجام نشد<b></p>");

mysqli_close($link);
include ("includes/footer.php");
?>
