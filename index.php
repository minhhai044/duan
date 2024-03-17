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
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':

            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $user = isset($_POST['user']) ? $_POST['user'] : '';
            $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
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
                    add_taikhoan($email, $user, $pass, $address, $tele);
                    $thongbao = "Đã đăng ký thành công!";
                    // Đặt lại giá trị các trường nhập về trống
                    $email = '';
                    $user = '';
                    $pass = '';
                    $address = '';
                    $tele = '';
                } else {
                    // Nếu có lỗi, hiển thị các lỗi
                    $thongbao = "Đăng ký không thành công. Vui lòng kiểm tra lại các trường sau:<br>" . implode("<br>", $errors);
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
    }
} else {
    include "./view/home.php";
}
