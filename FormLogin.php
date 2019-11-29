<?php 
require_once 'init.php';

$success = true;

if (!empty($_POST['email']) && !empty($_POST['password'])) {  
  $user = findUserByEmail($_POST['email']);
  if ($user) {
    if ($user && $user['status'] == 1 && password_verify($_POST['password'], $user['password'])) {
      $success = true;
      $_SESSION['userId'] = $user['id'];
      header('Location: index.php');
      exit();
    } else {
      $success = false;
    }      
  } else {
    $success = false;
  }
}
?>

<?php include"Header.php" ?>
<?php if (!$success) : ?>
  <div class="alert alert-danger" role="alert">
    Email và mật khẩu không hợp lệ vui lòng đăng nhập lại!
  </div>
  <?php endif; ?>
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
            <form method="POST">
                <h2 style="color: royalblue;">ĐĂNG NHẬP</h2>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1"> <strong> Tên Đăng Nhập </strong></label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Tên đăng nhập hoặc địa chỉ email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><strong>Mật Khẩu</strong></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                </div>
                <div style="text-align: center">
                <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                </div>
            </form>
            <p style="text-align: center"><br> <a href="ForgotPassword.php">Quên Tài Khoản?</a></p>
            <HR align="center" WIDTH="60%"/>
            <!--Chuyển trang--->
            <div style="text-align: center">
            <a href="Register.php"> <button type="submit" class="btn btn-primary">Tạo Tài Khoản Mới</button> </a>
            </div>
        </div>
    </div>
<?php include"Footer.php"?>