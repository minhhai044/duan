<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "./view/header.php";
include "global.php";
$dsdm = loadall_danhmuc();
$spnew = list_sanpham_home();
$dstop5 = list_sanpham_top5();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':

            // Khởi tạo các biến nhận dữ liệu từ form
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $user = isset($_POST['user']) ? $_POST['user'] : '';
            $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
            $pass_confirm = isset($_POST['pass_confirm']) ? $_POST['pass_confirm'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
            $tele = isset($_POST['tele']) ? $_POST['tele'] : '';
            $thongbao = '';

            // Kiểm tra xem form đã được submit và dữ liệu "dangky" đã được gửi và có giá trị lớn hơn 0 không
            if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                // Xác thực dữ liệu
                $errors = array();

                // Kiểm tra email
                if (empty($email)) {
                    $errors[] = "Vui lòng nhập địa chỉ email.";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Địa chỉ email không hợp lệ.";
                }

                // Kiểm tra tên người dùng
                if (empty($user)) {
                    $errors[] = "Vui lòng nhập tên người dùng.";
                }

                // Kiểm tra mật khẩu
                if (empty($pass)) {
                    $errors[] = "Vui lòng nhập mật khẩu.";
                }

                // Kiểm tra nhập lại mật khẩu
                if (empty($pass_confirm)) {
                    $errors[] = "Vui lòng nhập lại mật khẩu.";
                } elseif ($pass_confirm !== $pass) {
                    $errors[] = "Mật khẩu nhập lại không khớp.";
                }

                // Kiểm tra địa chỉ
                if (empty($address)) {
                    $errors[] = "Vui lòng nhập địa chỉ.";
                }

                // Kiểm tra số điện thoại
                if (empty($tele)) {
                    $errors[] = "Vui lòng nhập số điện thoại.";
                } elseif (!preg_match("/^[0-9]*$/", $tele)) {
                    $errors[] = "Số điện thoại chỉ được chứa số.";
                }

                // Nếu không có lỗi, thực hiện thêm tài khoản
                if (empty($errors)) {
                    // Thực hiện thêm tài khoản vào cơ sở dữ liệu ở đây
                    // add_taikhoan($email, $user, $pass, $address, $tele);
                    $thongbao = "Đã đăng ký thành công!";
                    // Đặt lại giá trị các trường nhập về trống
                    $email = '';
                    $user = '';
                    $pass = '';
                    $pass_confirm = '';
                    $address = '';
                    $tele = '';
                } else {
                    // Nếu có lỗi, hiển thị các lỗi
                    $thongbao = "<div style='color:red;'>Đăng ký không thành công. Vui lòng kiểm tra lại ";
                }
            }

            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $checkuser = checktaikhoan($email, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại!";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            include "view/lienhe.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là : " . $checkemail['pass'];
                } else {
                    $thongbao = "email không tồn tại";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'sanpham':
            if (isset($_GET['iddm']) && ($_GET['iddm'])) {
                $iddm = $_GET['iddm'];
                $dssp = list_sanpham("", $iddm);
                $ten = loadtendm($iddm);
                include "view/sanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = sua_sanpham($id);
                extract($onesp);
                $spcungloai = sua_sanpham_cungloai($id, $iddm);

                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }

            $listsp = list_sanpham($kyw);

            if (empty($listsp)) {
                echo "Không có sản phẩm nào được tìm thấy.";
            } else {
                include "view/sanphamtimkiem.php";
            }
            break;
    }
} else {
    include "./view/home.php";
}
