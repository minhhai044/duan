<link rel="stylesheet" href="../../cssfile/cssadmin.css">
<div class="form_danhmuc">
        <form action="index.php?act=adddm" method="post">
                <h2>Thêm Danh Mục</h2>

                <div class="form_text">
                        <p>Mã Danh Mục : </p>
                        <input type="text" name="" disabled id=""> <br>
                        <p>Tên Danh Mục : </p>
                        <input type="text" placeholder="Nhập tên danh mục" name="tenloai" id=""> <br>

                </div>
                <div class="form_buttom">
                        <input type="submit" name="themmoi" value="ADD">
                        <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>
                </div>
                <?php if (!empty($thongbao)) : ?>
                        <p><?php echo $thongbao; ?></p>
                <?php endif; ?>
        </form>
</div>