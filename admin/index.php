<?php
    session_start();
    $act = isset($_GET['action']) ? $_GET['action'] : "trangchu";

    switch ($act) {
        case 'trangchu':
            require_once('controller_admin/home.php');
            break;
        case 'taikhoan':           // đã hiển thị được thông tin
            require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->list();
            require_once('controller_admin/quanlytaikhoan.php');
            break;
        case 'sanpham':
            require_once('controller_admin/quanlysanpham.php');
            break;
        case 'loaisanpham':
            require_once('controller_admin/quanlyloaisanpham.php');
            break;
        case 'hoadon':
            require_once('controller_admin/duyethoadon.php');
            break;
        case 'danhmuc':
            require_once('controller_admin/danhmucsanpham.php');
            break;
        case 'banner':
            require_once('controller_admin/quanlybanner.php');
            break;
        case 'khuyenmai':
            require_once('controller_admin/quanlykhuyenmai.php');
            break;



        case 'xemnguoidung':
           require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->details();
            require_once('controller_admin/quanlytaikhoan.php');
            break;



            
        case 'suanguoidung':
            require_once('controller_admin/taikhoan/sua.php');
            break;
        case 'them':
            require_once('controller_admin/taikhoan/them.php');
            break;
        
        default:
            # code...
            break;
    }
?>