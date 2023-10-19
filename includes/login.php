<div class="col-6 m-auto mt-5">
<?php
if(isset($msg)){
    foreach($msg as $message){
        ?>
<div class="alert alert-danger" role="alert">
<?=$message?>
</div>
        <?php
    }
}
    ?>
<form method="post" action="includes/process.php?login">


    <div class="wrap-user">
        <div class="title-user d-flex align-items-end justify-content-between">
            <span>Đăng nhập</span>
         </div>
        <form class="form-user validation-user" novalidate="" method="post" action="account/dang-nhap" enctype="multipart/form-data">
            <div class="input-group input-user">

                <input type="text" class="form-control" id="username" name="username" placeholder="Tài khoản" required="">
                <div class="invalid-feedback">Vui lòng nhập tài khoản</div>
            </div>
            <div class="input-group input-user">

                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu" required="">
                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
            </div>
            <div class="button-user d-flex align-items-center justify-content-between">
                <input type="submit" class="btn btn-primary" name="dangnhap" value="Đăng nhập">

            </div>

        </form>
    </div>

</form>
</div>