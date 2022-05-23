cd <?php
include ("includes/header.php");
?>

<div style="margin-top: 130px"></div>

<h2 class="title">ورود</h2>

<div class="container">
    <div class="row justify-content-center p-4">
        <div class="col-md-6">
            <form action="" method="post" name="register">
                <div class="mb-4">
                    <input type="text" class="form-control" placeholder="کد ملی">
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control" placeholder="گذرواژه">
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
