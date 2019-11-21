<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title> 1760076-1760119 &reg; Đồ Án LTW1</title>
</head>
<body>
<div class="container">
    <div style="position:absolute; display: block">
        <div class="container" style="width: 100vw; opacity: 0.2; "> <?php include"FormLogin.php"?> </div>
    </div>
    <div style="z-index: 9999999; position: relative; background-color: rgba(192,192,192,0.3); margin: 0 25vw 0 25vw">
        <form style="margin-top: 3vw; padding: 2vw">
            <h4>ĐĂNG KÝ</h4>
            <div class="form-group">
                <label for="fullname">Họ tên</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ Và Tên" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '' ?>">
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-4 pt-0">Giới tính</legend>
                    <div class="col-sm-8">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Nam
                        </label>
                    </div>  
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Nữ
                        </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group">
                <label for="email"> Tên Đăng Nhập</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Tên Đăng Nhập" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="email"> Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mật Khẩu">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" name="agree-tos" class="form-check-input">
                <a href="#"> Đồng ý điều khoản trang Web </a>
                </label>
            </div>
            
        </form>
            <form action="FormLogin.php" method="POST" > 
                <div style="text-align: center; padding-bottom: 2vw">
                <button type="submit" class="btn btn-primary">Tạo Tài Khoản Mới</button>
                </div>
            </form>
    </div>
</div>
</body>
</html>