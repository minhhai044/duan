<link rel="stylesheet" href="../filecss/a.css">
<div class="container">
    <table>
        <h2 style="margin:10px 0px ;">Danh sách loại Hàng</h2>
        <tr>
            <th colspan="">Mã TK</th>
            <th colspan="">Tên Đăng nhập</th>
            <th colspan="">Mật khẩu</th>
            <th colspan="">Email</th>
            <th colspan="">Địa chỉ</th>
            <th colspan="">Điện thoại</th>
            <th colspan="">Vai trò</th><th>Chức năng</th>
        </tr>
        <?php foreach ($listtk as $taikhoan) {

            extract($taikhoan);
            $suatk = "index.php?act=suatk&id=" . $id;
            $xoatk = "index.php?act=xoatk&id=" . $id;
            echo '
           <tr>
           <td>' . $id . '</td>
           <td >' . $user . '</td>
           <td >' . $pass . '</td>
           <td >' . $email . '</td>
           <td >' . $address . '</td>
           <td >' . $tele . '</td>
           <td >' . $role . '</td>
           <td style="width: 200px;">
                <a href="' . $xoatk . '"><input type="button" value="Xóa"></a>
           </td>
       </tr>
       ';
        } ?>
    </table>
</div>