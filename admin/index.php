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
            break; 
        case 'edit':    // UPDATE giao diện
            require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->edit();
            break;
 

        case 'sua_xl':   //UPDATE xử lý
            require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->update();
            break;




        case 'them':   // chỗ này chưa là nên sai
            require_once('controller_admin/taikhoan/them.php');
            break;
        
        default:
            # code...
            break;
    }
?>