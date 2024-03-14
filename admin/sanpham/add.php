<div class="form_danhmuc">
<h2>ADD Sản Phẩm</h2>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <div class="form_text">
    <p>Danh Mục :</p>
        <select name="iddm" id="sp">
            <?php
            foreach ($listdm as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $tendm . '</option>';
            }
            ?>
        </select> <br>
        <p>Tên sản phẩm:</p><input placeholder="Nhập tên sản phẩm" type="text" name="tensp" id="sp"> <br>
       <p> Ảnh :</p> <input type="file"  name="hinh" id="sp"> <br>
        <p>Giá : </p><input type="number" placeholder="Nhập giá sản phẩm" name="gia" id="sp"> <br>
        <p>Mô tả :</p> <textarea placeholder="Nhập mô tả" name="mota" cols="79" rows="10"></textarea> <br>
    </div>
        <div class="form_buttom">
        <input type="submit" name="themmoi" id="" value="ADD">
        <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
        </div>
        <?php if (!empty($thongbao)) : ?>
                        <p><?php echo $thongbao; ?></p>
                <?php endif; ?>
    </form>
</div>