<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['themmoi'])) {
                if (!empty($_POST['tenloai'])) {
                    $tenloai = $_POST['tenloai'];
                    add_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                } else {
                    $thongbao = "Bạn chưa nhập tên danh mục";
                }
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            // $sql = "SELECT*FROM danhmuc ORDER BY id desc";
            // $listdm = pdo_query($sql);
            $listdm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                if (!empty($_POST['tenloai'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenloai);
                }
            }
            $listdm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'addsp':
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['themmoi'])) {
                if (!empty($_POST['tensp']) && !empty($_POST['iddm']) && !empty($_POST['gia']) && !empty($_POST['mota']) && !empty($_FILES['hinh']['name'])) {
                    $tensp = $_POST['tensp'];
                    $iddm = $_POST['iddm'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $file = $_FILES['hinh'];
                    $filename = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../uploadfile/" . $filename);
                    add_sanpham($tensp, $gia, $mota, $filename, $iddm);
                    $thongbao = "Thêm thành công";
                } else {
                    if (empty($_POST['tensp'])) {
                        $thongbao = "Bạn chưa nhập đầy đủ thông tin";
                    } elseif (empty($_POST['iddm'])) {
                        $thongbao = "Bạn chưa nhập đầy đủ thông tin";
                    } elseif (empty($_POST['gia'])) {
                        $thongbao = "Bạn chưa nhập đầy đủ thông tin";
                    } elseif (empty($_POST['mota'])) {
                        $thongbao = "Bạn chưa nhập đầy đủ thông tin";
                    } elseif (empty($_FILES['hinh']['name'])) {
                        $thongbao = "Bạn chưa nhập đầy đủ thông tin";
                    }
                }
            }

            $listdm = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdm = loadall_danhmuc();
            $listsp = list_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsp = list_sanpham1();
            include "sanpham/list.php";
            break;
        case 'suasp':
            $listdm = loadall_danhmuc();
            $listsp = list_sanpham1();
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = sua_sanpham($_GET['id']);
            }
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST["capnhat"]) && $_POST["capnhat"]) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $filename = $_FILES['hinh']['name'];
                $target_dir = "../uploadfile/";
                $target_file = $target_dir . basename($filename);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                update_sanpham($id, $tensp, $gia, $mota, $filename);
            }
            $listdm = loadall_danhmuc();
            $listsp = list_sanpham1();
            include "sanpham/list.php";
            break;
        case 'dskh':
            $listtk = list_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $sql = "DELETE FROM danhmuc WHERE id=".$_GET['id'];
                // pdo_execute($sql);
                delete_taikhoan($_GET['id']);
            }
            // $sql = "SELECT*FROM danhmuc ORDER BY id desc";
            // $listdm = pdo_query($sql);
            $listtk = list_taikhoan();
            include "taikhoan/list.php";
            break;
            case 'xoabl':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    // $sql = "DELETE FROM danhmuc WHERE id=".$_GET['id'];
                    // pdo_execute($sql);
                    delete_binhluan($_GET['id']);
                }
                // $sql = "SELECT*FROM danhmuc ORDER BY id desc";
                // $listdm = pdo_query($sql);
                $listbl = list_binhluan(0);
                include "binhluan/list.php";
                break;
                //COntroler tin tuc  //COntroler tin tuc  //COntroler tin tuc 


















        default:

            break;
    }
} else {
    include_once "home.php";
}
