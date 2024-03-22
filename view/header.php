<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./cssfile/cssadmin.css">
  </head>
  <body>
    <div class="container">
      <header>
        <div class="header_img">
          <img
            src="https://tse4.mm.bing.net/th?id=OIP.QdkBFiUZG4SMw0C7krIbrwHaHa&pid=Api&P=0&h=180"
            alt=""
          />
        </div>
        <div class="header_search">
          <form action="index.php?act=listsp" method="post">
          <input type="text" placeholder="Nhập sản phẩm tìm kiếm" name="kyw" />
          <input type="submit" id="go1" name="listok" value="Tìm kiếm">
        </div>
          </form>
        <div class="header_dndk">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div style="margin: 0px 20px">
            <p>Xin chào</p>
            <p><a href="#"><?= $user ?></a></p>
            <?php if ($role == 1) { ?>
                <a href="admin/index.php">Đăng nhập admin</a>
            <?php } ?>
            <a href="index.php?act=thoat">Thoát</a>
            </div>
        <?php } else {
        ?>
          <a href="index.php?act=dangnhap">Đăng nhập</a>
          <a href="index.php?act=dangky">Đăng ký</a>
        <?php } ?>        
        </div>
      </header>
      <nav>
        <ul>
          <li><a href="index.php">Trang chủ</a></li>
          <li><a href="index.php?act=adddm">Sản phẩm</a></li>
          <li><a href="index.php?act=addsp">Liên hệ</a></li>
          <li><a href="">Hỏi đáp</a></li>
          <li><a href="#">Hỗ trợ</a></li>
        </ul>
      </nav>

      
