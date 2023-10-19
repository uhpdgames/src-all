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

<form method="post" action="includes/process.php?signup">

    <div class="wrap-user">
        <div class="title-user">
            <span>Đăng ký</span>
        </div>
        <form class="form-user validation-user" novalidate="" method="post" action="account/dang-ky" enctype="multipart/form-data">
            <div class="input-group">

                <input type="text" class="form-control" id="ten" name="ten" placeholder="HỌ & TÊN" required="">
                <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
            </div>
            <div class="input-group">

                <input type="text" class="form-control" id="username" name="username" placeholder="TÀI KHOẢN" required="">
                <div class="invalid-feedback">Vui lòng nhập tài khoản</div>
            </div>
            <div class="input-group">

                <input type="password" class="form-control" id="password" name="password" placeholder="MẬT KHẨU" required="">
                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
            </div>
            <div class="input-group">

                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="NHẬP LẠI MẬT KHẨU" required="">
                <div class="invalid-feedback">Vui lòng nhập lại mật khẩu</div>
            </div>
            <div class="input-group gioi-tinh">
                <div class="input-group-prepend">
                    <span>GIỚI TÍNH</span>
                </div>
                <div class="radio-user custom-control custom-radio">
                    <input type="radio" id="nam" name="gioitinh" class="custom-control-input" value="1" required="">
                    <label class="custom-control-label" for="nam">Nam</label>
                </div>
                <div class="radio-user custom-control custom-radio">
                    <input type="radio" id="nu" name="gioitinh" class="custom-control-input" value="2" required="">
                    <label class="custom-control-label" for="nu">Nữ</label>
                </div>
            </div>
            <div class="input-group">

                <input type="text" class="form-control" id="ngaysinh" name="ngaysinh" placeholder="NGÀY SINH" required="">
                <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
            </div>
            <div class="input-group">

                <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" required="">
                <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
            </div>
            <div class="input-group">

                <input type="text" class="form-control" id="dienthoai" name="dienthoai" placeholder="ĐIỆN THOẠI" required="">
                <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
            </div>
            <div class="input-group">

                <input type="text" class="form-control" id="diachi" name="diachi" placeholder="ĐỊA CHỈ" required="">
                <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
            </div>
            <div class="button-user">
                <input type="submit" class="btn btn-primary btn-block" name="dangky" value="Đăng ký thành viên">
            </div>
        </form>
    </div>

</form>
</div>