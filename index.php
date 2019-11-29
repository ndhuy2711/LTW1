<?php 
require_once 'init.php';

if ($currentUser) {
   $newFeeds = getNewFeeds();

}

?>
<?php include "Header.php" ?>
<body>
    <div>
        
        <div style="clear: both;heigh: 5vw; width: 100vw">
            <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
                <form class="form-inline my-2 my-lg-0" style="margin: 0 3vw 0 2vw;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Tìm Kiếm" style="width: 40vw">
                    <a href="#"><img  style="width: 40px; heigh: 40px;" src="./IMG/search.png"/></a>
                    
                </form>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php" id="navbarDropdownMenuLink">
                        <img src="<?php echo file_exists('./IMG/' . $currentUser['id'] . '.jpg') ? ('./IMG/' . $currentUser['id'] . '.jpg') : ('./IMG/1.jpg') ?>" class="avatar"><?php echo " " . $currentUser['fullname'] ?>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" style="margin-right: 2vw">
                        <a class="nav-link" href="#">Tạo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><img  style="width: 40px; heigh: 40px; margin-right: 1vw" src="./IMG/addfr.png"/></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><img  style="width: 40px; heigh: 40px; margin-right: 1vw; margin-top: 5px" src="./IMG/mess.png"/></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><img  style="width: 40px; heigh: 40px; margin-right: 1vw;" src="./IMG/thongbao.png"/></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tùy chọn
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Cài đặt</a>
                        <a class="dropdown-item" href="#">abc</a>
                        <a class="dropdown-item" href="#">abc</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Đăng Xuất</a>
                        </div>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</body>
<?php if ($currentUser) : ?>
<!-- <p>Chào mừng <?php echo $currentUser['fullname'] ?> đã trở lại.</p> -->

<div class="row" style="margin: 2vw 0 2vw 0">
<div class="col-3"></div>
<div class="col-6">
<form action="post.php" method = "POST" >
        <div class = "form-group">
    <label for="content"><h1>Tạo Bài Viết</h1></label>
    <textarea class="form-control" name='content' id="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Đăng Bài</button>
        </form>
</div>
<div class="col-3"></div>
</div>
<?php foreach ($newFeeds as $post) :  ?>
    <div class="card" style="margin: 2vw;">
    <div class="card-body">
        <h5 class="card-title">x
        <div class="row">
            <div class="col">
            <?php if ($post['userHasAvatar']) : ?>
            <img class="avatar" src="uploads/avatars/<?php echo $post['userId'] ?>.jpg">
            <?php else : ?>
            <img class="avatar" src="no-avatar.jpg">
            
            <?php endif; ?>
            </div>
            <div class="col-11">
            <?php echo $post['userFullname'] ?>
            </div>
        </div>
        </h5>
        <p class="card-text">
        <small>Đăng lúc: <?php echo $post['createdAt'] ?></small>
        <p><?php echo $post['content'] ?></p>
        </p>
    </div>
    </div>
    <?php endforeach; ?>
    <?php else: ?>

    <?php endif ?>
    <?php include 'footer.php' ?>