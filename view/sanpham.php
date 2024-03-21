<h1>Sản phẩm</h1>
<div class="sanpham">
  <?php
  foreach ($dssp as $sp) {
    extract($sp);
    $hinh = $imm . $img;
    $link = "index.php?act=sanphamct&idsp=" . $id;
    echo '
      <div class="sanpham_home">
      <a href="' . $link . '"><img src="' . $hinh . '" alt="" /></a>
    <h5><a href="' . $link . '">' . $tensp . '</a></h5>
    <p><a href="' . $link . '">' . $giasp . 'đ</a></p>
    </div>';
  }
  ?>