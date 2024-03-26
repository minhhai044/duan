<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./cssfile/cssadmin.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container1">
      <header>
        <div class="header_img">
          <img
            src="https://img.freepik.com/premium-vector/creative-modern-illustration-seventy-seven-monogram-sign-geometric-logo-design-template_320494-1676.jpg"
            alt=""
          />
        </div>
        <div class="header_search">
          <form action="index.php?act=listsp" method="post">
          <input type="text" style="width: 300px;" class="form-control" id="exampleFormControlInput1" name="kyw" placeholder="Nhập sản phẩm tìm kiếm">
          <input type="submit" style="border-radius: 5px; margin-left: 2px; ; border:none;" id="go1" name="listok" value="Tìm kiếm">
          </form>
        </div>
          
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

      
