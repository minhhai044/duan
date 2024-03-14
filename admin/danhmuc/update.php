<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="form_danhmuc">
    <form action="index.php?act=updatedm" method="post">
        <div class="form_text">
            <p>Mã Danh Mục :</p>
            <input type="text" name="" disabled id=""> <br>
            <p>Tên Danh Mục :</p>
            <input type="text" name="tenloai" value="<?php if (isset($tendm) && ($tendm != "")) echo $tendm; ?>" id=""> <br>
        </div>
        <div class="form_buttom">
            <input type="submit" name="capnhat" value="Cập nhật">
            <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
        </div>
        <?php if (!empty($thongbao)) : ?>
            <p><?php echo $thongbao; ?></p>
    <?php endif; ?>

    </form>
</div>