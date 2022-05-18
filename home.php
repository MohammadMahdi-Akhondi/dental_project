<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="UTF-8">
        <title>صفحه اصلی</title>

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
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="logo" height="80">
                </a>
            </div>
        </nav>

        <!-- Second navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" style="font-size: 17px">
                        <a class="nav-link active" aria-current="page" href="#">صفحه اصلی</a>
                        <a class="nav-link active" href="#">رزرو نوبت</a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" style="direction: ltr;">
                    <a href="#" class="nav-link">
                        <img src="icons/right-to-bracket-solid.svg" alt="login" width="25px" class="filter-white">
                    </a>
                    <a href="#" class="nav-link">
                        <img src="icons/user-plus-solid.svg" alt="register" width="25px" class="filter-white">
                    </a>
                </div>
            </div>
        </nav>

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

        <h3>معرفی پزشکان</h3>


    </body>
</html>