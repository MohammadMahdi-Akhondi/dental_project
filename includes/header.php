<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>دندانپزشکی رجایی</title>

    <!-- Bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- My custom CSS -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body dir="rtl">

<!-- First navbar -->
<nav class="navbar navbar-light" style="background-color: #f0f8ff;">
    <div class="container-fluid" style="text-align: center">
        <span class="navbar-brand mb-3 mt-3" style="font-size: 30px">دندان پزشکی رجایی</span>
        <a class="navbar-brand" href="home.php">
            <img src="img/logo.png" alt="logo" height="80">
        </a>
    </div>
</nav>

<!-- Second navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="font-size: 17px">
                <a class="nav-link active" href="home.php">صفحه اصلی</a>
                <?php
                if (isset($_SESSION['logged']) && $_SESSION['logged']===true)
                {
                ?>
                <a class="nav-link active" href="book_turn.php">رزرو نوبت</a>
                <?php
                }
                ?>

                <a class="nav-link active" href="home.php#introduction">معرفی پزشکان</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" style="direction: ltr;">
            <?php
            if (isset($_SESSION['logged']) && $_SESSION['logged']===true)
            {
            ?>
                <a href="logout.php" class="nav-link">
                    <img src="icons/right-from-bracket-solid.svg" alt="logout" width="25px" class="filter-white">
                </a>
                <span class="name-header"><?php echo $_SESSION['full_name']?></span>
            <?php
            }
            else
            {
            ?>
            <a href="login.php" class="nav-link">
                <img src="icons/right-to-bracket-solid.svg" alt="login" width="25px" class="filter-white">
            </a>
            <a href="register.php" class="nav-link">
                <img src="icons/user-plus-solid.svg" alt="register" width="25px" class="filter-white">
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</nav>
