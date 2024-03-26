<link rel="stylesheet" href="../filecss/a.css">
<div class="container">
    <table>
        <h2 style="margin:10px 0px ;">Danh sách Bình Luận</h2>
        <tr>
        <th colspan="">ID</th>
            <th colspan="">Nội Dung</th>
            <th colspan="">IDUser</th>
            <th colspan="">IDpro</th>
            <th colspan="">Ngày bình luận</th>
            <th>Chức năng</th>
        </tr>
        <?php foreach ($listbl as $binhluan) {

            extract($binhluan);
            $suabl = "index.php?act=suabl&id=" . $id;
            $xoabl = "index.php?act=xoabl&id=" . $id;
            echo '
           <tr>
           <td>' . $id . '</td>
           <td >' . $noidung . '</td>
           <td >' . $iduser . '</td>
           <td >' . $idpro . '</td>
           <td >' . $ngaybinhluan . '</td>
           <td style="width: 200px;">
                <a href="' . $xoabl . '"><input type="button" value="Xóa"></a>
           </td>
       </tr>
       ';
        } ?>
    </table>
</div>