<?php
include ("includes/header.php");
?>
<h2 class="title">رزرو نوبت</h2>
<div class="row justify-content-center text-center">
    <div class="col-md-5">
        <form>
            <div class="input-group mt-5 mb-4" dir='ltr'>
                <select class="form-select" id="doctor_name" dir='rtl'>
                    <option value="1">شاهین</option>
                    <option value="2">معید</option>
                    <option value="3">محمد</option>
                </select>
                <label class="input-group-text" for="doctor_name">نام پزشک</label>
            </div>
            <button type="submit" class="btn btn-primary mb-3">تایید</button>
        </form>
    </div>
</div>
<form action="">
    <div class="table-responsive mt-4">
        <table class="table table-hover">
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
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
            </tr>
            <tr>
                <th scope="row">یک شنبه</th>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
            </tr>
            <tr>
                <th scope="row">دوشنبه</th>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
            </tr>
            <tr>
                <th scope="row">سه شنبه</th>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
            </tr>
            <tr>
                <th scope="row">چهارشنبه</th>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
            </tr>
            <tr>
                <th scope="row">پنجشنبه</th>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
                <td><button type="submit" class="btn btn-success">رزرو</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</form>
<?php
include ("includes/footer.php");
?>
