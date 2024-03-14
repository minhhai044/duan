<div class="table_list">
<h2>Danh Sách Danh Mục</h2>
<table>
    <tr>
        <th>Mã loại</th>
        <th>Tên Loại</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach ($listdm as $danhmuc) {

        extract($danhmuc);
        $suadm = "index.php?act=suadm&id=" . $id;
        $xoadm = "index.php?act=xoadm&id=" . $id;
        echo '
           <tr>
           <td>' . $id . '</td>
           <td >' . $tendm . '</td>
           <td style="width: 200px;">
                <a href="' . $suadm . '"><input type="button" value="Sửa"></a>
                <a href="' . $xoadm . '"><input type="button" onclick="return confirm(\'Bạn có chắc muốn xóa danh mục này không?\');" value="Xóa"></a>
           </td>
       </tr>
       ';
    } ?>
</table>
<a href="index.php?act=adddm"><input id="ldm" type="button" value="ADD"></a>
</div>