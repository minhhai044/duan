<div class="form_danhmuc">
    <form action="index.php?act=listsp" method="post">
    <h2>Tìm kiếm sản phẩm</h2>

        <div class="form_text">
            <input type="text" placeholder="Nhập sản phẩm tìm kiếm" name="kyw" id="">
        </div>
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdm as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $tendm . '</option>';
            }
            ?>
        </select>
        <div class="form_buttom">
            <input type="submit" id="go1" name="listok" value="GO">
        </div>
    </form>
    <table>
        <h2>Danh sách sản phẩm</h2>
        <tr>
            <th>Mã</th>
            <th>Tên Sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Lượt xem</th>
            <th>Chức năng</th>
        </tr>
        <?php foreach ($listsp as $sanpham) {

            extract($sanpham);
            $suasp = "index.php?act=suasp&id=" . $id;
            $xoasp = "index.php?act=xoasp&id=" . $id;
            $hinhpath = "../uploadfile/" . $img;
            if (is_file($hinhpath)) {
                $anh = "<img src='" . $hinhpath . "' height='80' >";
            } else {
                $anh = "Khong co";
            }
            echo '
           <tr>
           <td>' . $id . '</td>
           <td >' . $tensp . '</td>
           <td >' . $anh . '</td>
           <td >' . $giasp . '</td>
           <td >' . $mota . '</td>
           <td >' . $luotxem . '</td>
           <td style="width: 200px;">
                <div class="form_buttom">
                <a href="' . $suasp . '"><input type="button" id="go" value="Sửa"></a>
                <a href="' . $xoasp . '"><input type="button" id="go" onclick="return confirm(\'Bạn có chắc muốn xóa sản phẩm này không?\');" value="Xóa"></a>
                </div>
           </td>
       </tr>
       ';
        } ?>
    </table>
    <div class="form_buttom">
        <a href="index.php?act=addsp"><input type="button" id="go1" value="ADD"></a>
    </div>
</div>