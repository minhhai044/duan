
<h1>Sản phẩm tìm kiếm</h1>
<div class="sanpham"> 
    <?php foreach ($listsp as $sanpham) {

        extract($sanpham);
        $hinh = $imm . $img;
        $link = "index.php?act=sanphamct&idsp=" . $id;
        echo '
      <div class="sanpham_home">
      <a href="' . $link . '"><img src="' . $hinh . '" alt="" /></a>
    <h5><a href="' . $link . '">' . $tensp . '</a></h5>
    <p><a href="' . $link . '">' . $giasp . 'đ</a></p>
    </div>';
    } ?>
