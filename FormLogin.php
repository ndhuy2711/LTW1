<?php include"Header.php" ?>
<body>
<div class="container">
    <div class="row">
        <!---CỘT TRÁI FORM-->
        <div class="col-7" style="margin-top: 2vw; font-family: SFProDisplay-Regular, Helvetica, Arial, sans-serif;">
            <div>
                <img src="./IMG/logo.png" style="width: 10vw; hight:10vw; float: left"/>
            </div>
            <div style="float: left; margin-left: 4vw; margin-top: 4vw"> <strong style="color: royalblue"> Đồ Án Web 1 <br> Đề Tài:</strong> Mạng Xã Hội</div>
        </div>

        <!---CỘT PHẢI FORM ĐĂNG NHẬP-->
        <div class="col-5" style="margin-top: 5vw;">
            <form>
                <h2 style="color: royalblue;">ĐĂNG NHẬP</h2>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1"> <strong> Tên Đăng Nhập </strong></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên đăng nhập hoặc địa chỉ email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><strong>Mật Khẩu</strong></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                </div>
                <div style="text-align: center">
                <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                </div>
            </form>
            <p style="text-align: center"><br> <a href="#">Quên Tài Khoản?</a></p>
            <HR align="center" WIDTH="60%"/>
            <!--Chuyển trang--->
            <form action="Register.php" method="POST">
            <div style="text-align: center">
            <button type="submit" class="btn btn-primary">Tạo Tài Khoản Mới</button>
            </div>
            </form>
        </div>
    </div>
<?php include"Footer.php"?>