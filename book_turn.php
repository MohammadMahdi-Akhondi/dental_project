<?php
include ("includes/header.php");
include ("includes/check_turn.php");

if (!(isset($_SESSION["logged"]) && $_SESSION["logged"] === true))
{
    ?>
    <script type="text/javascript">
        location.replace("home.php");
    </script>
    <?php
}

$link = mysqli_connect("localhost", "root", "", "dental_clinic");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query_dentists = "SELECT id, name, family FROM dentist";

$dentists = mysqli_query($link, $query_dentists);

$turns_array = array();

if (isset($_POST['submitButton'])){
    $dentist_id = $_POST['dentist_id'];

    $query_dentist_turn = "SELECT turn_id FROM turn WHERE dentist_id='$dentist_id'";
    $turns_row = mysqli_query($link, $query_dentist_turn);

    while ($row = mysqli_fetch_array($turns_row))
    {
        array_push($turns_array, $row['turn_id']);
    }

}
?>
<h2 class="title">رزرو نوبت</h2>
<div class="row justify-content-center text-center">
    <div class="col-md-5">
        <div class="alert alert-info mt-3" role="alert">
            ابتدا نام پزشک مورد نظر را انتخاب سپس تایید را بزنید.
        </div>
        <form method="POST" action="#">
            <div class="input-group mt-2 mb-4" dir='ltr'>
                <select class="form-select" name="dentist_id" id="dentist_name" dir='rtl'>
                    <?php
                    while ($row = mysqli_fetch_array($dentists))
                    {
                        if (isset($dentist_id)) {
                            if ($dentist_id==$row['id'])
                                echo "<option value=".$row['id']." selected>".$row['name']." ".$row['family']."</option>";
                            else
                                echo "<option value=".$row['id'].">".$row['name']." ".$row['family']."</option>";
                        }
                        else
                            echo "<option value=".$row['id'].">".$row['name']." ".$row['family']."</option>";
                    }
                    ?>
                </select>
                <label class="input-group-text" for="dentist_name">نام پزشک</label>
            </div>
            <button type="submit" class="btn btn-primary mb-3" name="submitButton">تایید</button>
        </form>
    </div>
</div>
<form action="action_book_turn.php" method="post">
    <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">روز</th>
                <th scope="col">۹ تا ۹:۳۰</th>
                <th scope="col">۹:۳۰ تا ۱۰</th>
                <th scope="col">۱۰ تا ۱۰:۳۰</th>
                <th scope="col">۱۰:۳۰ تا ۱۱</th>
                <th scope="col">۱۱ تا ۱۱:۳۰</th>
                <th scope="col">۱۱:۳۰ تا ۱۲</th>
                <th scope="col">۱۲ تا ۱۲:۳۰</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">شنبه</th>
                <?php
                for ($i=1; $i < 8;$i++)
                {
                    check_turn($i,$turns_array);
                }
                ?>
            </tr>
            <tr>
                <th scope="row">یک شنبه</th>
                <?php
                for ($i=8; $i < 15;$i++)
                {
                    check_turn($i,$turns_array);
                }
                ?>
            </tr>
            <tr>
                <th scope="row">دوشنبه</th>
                <?php
                for ($i=15; $i < 22;$i++)
                {
                    check_turn($i,$turns_array);
                }
                ?>
            </tr>
            <tr>
                <th scope="row">سه شنبه</th>
                <?php
                for ($i=22; $i < 29;$i++)
                {
                    check_turn($i,$turns_array);
                }
                ?>
            </tr>
            <tr>
                <th scope="row">چهارشنبه</th>
                <?php
                for ($i=29; $i < 36;$i++)
                {
                    check_turn($i,$turns_array);
                }
                ?>
            </tr>
            <tr>
                <th scope="row">پنجشنبه</th>
                <?php
                for ($i=36; $i < 43;$i++)
                {
                    check_turn($i,$turns_array);
                }
                ?>
            </tr>
            </tbody>
        </table>
    </div>
    <?php
    if (isset($_POST['submitButton']))
    {
        ?>
        <input type="text" name="dentist_id" value="<?php echo $dentist_id ?>" hidden>
        <?php
    }
    ?>
    <button type="submit" class="btn btn-success mb-3 text-center">ثبت</button>
</form>


<?php
include ("includes/footer.php");
?>
