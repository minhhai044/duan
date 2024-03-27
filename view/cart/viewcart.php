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
                <th>Chức năng</th>
            </tr>

            <?php
            // viewcart();

            $tong = 0;
            $a = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                $hinh = $cart[2];
                $ttien = $cart[3] * $cart[4];
                $tong += $ttien;
                $xoadonhang = '<a href="index.php?act=delcart&idcart=' . $a . '"><button type="button" class="btn btn-success">Xóa</button>';
                echo '
                    <tr>
                    <td><img width="100px" src="' . $hinh . '"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . $ttien . ' VND</td>
                    <td>' . $xoadonhang . '</td>
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
<a style="margin-right: 10px;" href="index.php?act=delcart"><button type="button" class="btn btn-success">Xóa giỏ hàng</button>
    <a href="index.php?act=bill"><button type="button" class="btn btn-success">Xác nhận mua hàng</button>
</div>