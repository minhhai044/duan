<?php 
    if (isset($_SESSION['user'])) {
        $user=$_SESSION['user']['user'];
        $address=$_SESSION['user']['address'];
        $email=$_SESSION['user']['email'];
        $tele=$_SESSION['user']['tele'];
    }else {
        header("Location: http://localhost/duan/index.php?act=dangnhap");
    }
?>

<div class="sanpham_chitiet">
    <div class="sanpham_chitiet_lienquan">
        <h2>Thông tin gửi hàng</h2>
    </div>
    <table>
        <tr>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Chức năng</th>
        </tr>
        <tr>
            <td><?=$user?></td>
            <td><?=$address?></td>
            <td><?=$email?></td>
            <td><?=$tele?></td>
            <td><button type="button" class="btn btn-success">Sửa thông tin</button></td>
        </tr>
    </table>
</div>
<div class="sanpham_chitiet">
    <div class="sanpham_chitiet_lienquan">
        <h2>Giỏ hàng</h2>

    </div>
    <div class="table_giohang">

        <table style="padding: 10px; ">
            <tr>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá sản phẩm</th>
            </tr>

            <?php
            // viewcart();

            $tong = 0;
            $a = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                $hinh = $cart[2];
                $ttien = $cart[3] * $cart[4];
                $tong += $ttien;
                echo '
                    <tr>
                    <td><img width="100px" src="' . $hinh . '"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . $ttien . ' VND</td>
                    </tr>
                    ';

                $a += 1;
            }
            ?>
            <tr style="background-color: 737373;">
                <td colspan="3">Tổng đơn hàng: </td>
                <td colspan="2"><?php echo '<p>' . $tong . ' VND</p>'; ?></td>
            </tr>
        </table>
    </div>
</div>


<div class="mb-3" style="margin-top: 10px;">
    <a href="index.php?act=billcomfirm"><button type="button" class="btn btn-success">Đặt hàng</button>
</div>