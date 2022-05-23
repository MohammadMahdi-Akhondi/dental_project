<?php
include ("includes/header.php");
?>

<h2 class="title">ثبت نام</h2>

<div class="container">
    <div class="row justify-content-center p-4">
        <div class="col-md-6">
            <form action="" method="post" name="register">
                <div class="mb-4">
                    <input type="text" class="form-control" placeholder="نام">
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" placeholder="نام خانوادگی">
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" placeholder="کد ملی">
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="شماره همراه">
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control" placeholder="گذرواژه">
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control" placeholder="تکرار گذرواژه">
                </div>
                <button type="submit" class="btn btn-success">ثبت نام</button>
            </form>
        </div>
    </div>
</div>

<?php
include ("includes/footer.php");
?>
