<?php
include ("includes/header.php");

if (isset($_SESSION["logged"]) && $_SESSION["logged"] === true) {
    ?>
    <script type="text/javascript">
        location.replace("home.php");
    </script>
    <?php
}
?>

<h2 class="title">ثبت نام</h2>

<div class="container">
    <div class="row justify-content-center p-4">
        <div class="col-md-6">
            <form action="action_register.php" method="post" name="register">
                <div class="mb-4">
                    <input type="text" name="name" class="form-control" placeholder="نام">
                </div>
                <div class="mb-4">
                    <input type="text" name="family" class="form-control" placeholder="نام خانوادگی">
                </div>
                <div class="mb-4">
                    <input type="text" name="national_code" class="form-control" placeholder="کد ملی">
                </div>
                <div class="mb-4">
                    <input type="text" name="phone" class="form-control" aria-describedby="emailHelp" placeholder="شماره همراه">
                </div>
                <div class="mb-4">
                    <input type="password" name="password" class="form-control" placeholder="گذرواژه">
                </div>
                <div class="mb-4">
                    <input type="password" name="confirm_password" class="form-control" placeholder="تکرار گذرواژه">
                </div>
                <button type="submit" class="btn btn-success">ثبت نام</button>
            </form>
        </div>
    </div>
</div>

<?php
include ("includes/footer.php");
?>
