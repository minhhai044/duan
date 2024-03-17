<link rel="stylesheet" href="../cssfile/cssadmin.css">
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
    <div class="mySlides fade">
      <img src="uploadfile/3.jpg" />
    </div>

    <div class="mySlides fade">
      <img src="uploadfile/5.jpg" />
    </div>

    <div class="mySlides fade">
      <img src="uploadfile/x.jpg" />
    </div>
  </div>
  <div class="slideright">
    <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/samsung-s23-th1-right.png" alt="" />
    <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/right-banner-ipad-gen9-new-th2.jpg" alt="" />
    <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/right sv.png" alt="" />
  </div>
</div>
<article>
  <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/03/banner/Desk-1200x100.png" alt="" />
  <div class="hot_top_sanpham">
    <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/h/o/hot-sale-gia-soc-11-03-2024.png" alt="" />
    <div class="top_sanpham">
      <div class="top_sanpham_1"></div>
      <div class="top_sanpham_2"></div>
      <div class="top_sanpham_3"></div>
      <div class="top_sanpham_4"></div>
      <div class="top_sanpham_5"></div>
    </div>
  </div>

</article>
<h1>Sản phẩm</h1>
<div class="sanpham">
  <?php
  foreach ($spnew as $sp) {
    extract($sp);
    $hinh = $imm . $img;
    $link = "index.php?act=sanphamct&idsp=" . $id;
    echo '
      <div class="sanpham_home">
      <a href="' . $link . '"><img src="' . $hinh . '" alt="" /></a>
    <h5><a href="' . $link . '">' . $tensp . '</a></h5>
    <p><a href="' . $link . '">' . $giasp . '</a></p>
    </div>';
  }
  ?>



</div>
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