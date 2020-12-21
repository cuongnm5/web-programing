<?php
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
$_SESSION['isDangNhap'] = 0;
include "include/header.php";
?>
<body class="container">
    <div style="height:50px;"></div>
<h5 class="modal-title text-center" id="exampleModalLongTitle">Đăng nhập</h5>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="index.php?do=login">
                    <div class="form-group row">
                        <label for="username" class="col-md-12 col-form-label ">Username</label>
                        <div class="col-md-12">
                            <input id="username" type="username" class="form-control" name="username" value="" required autocomplete="username" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-12 col-form-label ">Password</label>
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6">
                            <a href="{{route('view_send_mail')}}">Quên mật khẩu?</a>
                        </div>
                        <div class="col-md-12">
                            <input type='submit' name="dangnhap" value='Đăng nhập' class="btn btn-danger text-right" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="height: 130px;">

</div>
</body>


<?php
include "include/footer.php";
?>