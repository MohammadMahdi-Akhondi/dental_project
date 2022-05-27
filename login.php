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
<div style="margin-top: 130px"></div>

<h2 class="title">ورود</h2>

<div class="container">
    <div class="row justify-content-center p-4">
        <div class="col-md-6">
            <form action="action_login.php" method="post" name="register">
                <div class="mb-4">
                    <input type="text" name="national_code" class="form-control" placeholder="کد ملی">
                </div>
                <div class="mb-4">
                    <input type="password" name="password" class="form-control" placeholder="گذرواژه">
                </div>
                <button type="submit" class="btn btn-success">ورود</button>
                <span>حساب ندارید؟ <a href="register.php">ثبت نام </a>کنید.</span>
            </form>
        </div>
    </div>
</div>

<div style="margin-top: 130px"></div>

<?php
include ("includes/footer.php");
?>
