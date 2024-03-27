<div class="slideshow">
  <div class="slideleft">
    <?php
    foreach ($dsdm as $dm) {
      extract($dm);
      $linkdm = "index.php?act=sanpham&iddm=" . $id;
      echo '<div class="listdanhmuc">
        <a href="' . $linkdm . '">' . $tendm . '</a>
      </div>';
    }
    ?>
  </div>
  <div class="slideshow-container">
    <div class="mySlides">
      <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/dt-inoi-series-sliding.jpg" />
    </div>

    <div class="mySlides">
      <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/xiaomi-14-sliding-preorder.jpg" />
    </div>

    <div class="mySlides">
      <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/galaxy-a35-sliding-teasing.png" />
    </div>
  </div>
  <div class="slideright">
    <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/s23-base-right-banner-home.png" alt="" />
    <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/right-banner-ipad-gen9-new-th2.jpg" alt="" />
    <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/right sv.png" alt="" />
  </div>
</div>
<div class="banner">
  <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/03/banner/Desk-1200x100.png" alt="" />
</div>
<article>

  <div class="hot_top_sanpham">
    <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/h/o/hot-sale-gia-soc-11-03-2024.png" alt="" />
    <div class="top_sanpham">
      <!-- <div class="top_sanpham_1"></div> -->
      <?php
      foreach ($dstop5 as $t5) {
        extract($t5);
        $hinh = $imm . $img;
        $link = "index.php?act=sanphamct&idsp=" . $id;
    $gia_fomat = number_format($giasp,0,'.','.');

        echo '<div class="top_sanpham_1"><a href="' . $link . '"><img src="' . $hinh . '" alt="" /></a>
        <h5><a href="' . $link . '">' . $tensp . '</a></h5>
        <p><a style="color:white;" href="' . $link . '">' . $gia_fomat . ' VND</a></p>
        <p><button type="button" class="btn btn-success">Thêm giỏ hàng</button></p></div>
        ';
      }
      ?>
    </div>
  </div>

</article>
<h2>Sản phẩm</h2>
<div class="sanpham">
  <?php
  foreach ($spnew as $sp) {
    extract($sp);
    $hinh = $imm . $img;
    $link = "index.php?act=sanphamct&idsp=" . $id;
    $gia_fomat = number_format($giasp,0,'.','.');
    echo '
      <div class="sanpham_home">
      <a href="' . $link . '"><img src="' . $hinh . '" alt="" /></a>
    <h5><a href="' . $link . '">' . $tensp . '</a></h5>
    <p><a style="color:gray;" href="' . $link . '">' . $gia_fomat . ' VND</a></p>
    <p>
    <form action="index.php?act=addtocart" method="post">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="hidden" name="tensp" value="'.$tensp.'">
    <input type="hidden" name="img" value="'.$hinh.'">
    <input type="hidden" name="giasp" value="'.$giasp.'">
    <input type="submit" name="addtocart" value="Thêm giỏ hàng" class="btn btn-success">
    </form>

    </p>
    </div>';
  }
  ?>
</div>
<footer class="footer container1">
  <div class="grid">
    <div class="grid_row">
      <div class="grid_column-2-4">
        <h4 class="footer_heading">CHĂM SÓC KHÁC HÀNG</h4>
        <ul class="footer_list">
          <li class="footer_list-item">
            <a href="" class="footer-item_link">Trung tâm trợ giúp</a>
          </li>
          <li class="footer_list-item">
            <a href="" class="footer-item_link">TickID Mall</a>
          </li>
          <li class="footer_list-item">
            <a href="" class="footer-item_link">Hướng dẫn mua hàng</a>
          </li>
        </ul>
      </div>
      <div class="grid_column-2-4">
        <h4 class="footer_heading">GIỚI THIỆU</h4>
        <ul class="footer_list">
          <li class="footer_list-item">
            <a href="" class="footer-item_link">Giới thiệu</a>
          </li>
          <li class="footer_list-item">
            <a href="" class="footer-item_link">Tuyển dụng</a>
          </li>
          <li class="footer_list-item">
            <a href="" class="footer-item_link">Điều khoản</a>
          </li>
        </ul>
      </div>
      <div class="grid_column-2-4">
      <h4 class="footer_heading">THEO DÕI CHÚNG TÔI TRÊN</h4>
      <ul class="footer_list">
          <li class="footer_list-item">
            <a href="" class="footer-item_link">
            <i class="fa-brands fa-facebook"></i>
              Facebook
            </a>
          </li>
          <li class="footer_list-item">
            <a href="" class="footer-item_link">
            <i class="fa-brands fa-instagram"></i>
              Instagram
            </a>
          </li>
          <li class="footer_list-item">
            <a href="" class="footer-item_link">
            Linkedin
            <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="grid_column-2-4">
      <h4 class="footer_heading">VÀO CỬA HÀNG TRÊN ỨNG DỤNG</h4>
      <div class="footer_download">
        <img src="https://anhong.com.vn/wp-content/uploads/2020/09/ma-qrcode-https-baohodoanhnghiep-com.png" alt="" class="footer__download-qr">
        <div class="footer_download-apps">
          <img src="https://digitopoly.files.wordpress.com/2016/06/app-store-logo.png" alt="" class="footer__download-app-img1">
          <img src="https://th.bing.com/th/id/OIP.nKcOwhxmeE4HcRiDbB4ATAAAAA?rs=1&pid=ImgDetMain" alt="" class="footer__download-app-img2">
        </div>
      </div>
      </div>
    </div>
  </div>

</footer>
</div>
</body>
<script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
</script>

</html>