<?php
function viewcart()
{


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

}
