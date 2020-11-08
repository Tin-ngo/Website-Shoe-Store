<?php
    session_start();
    $act = isset($_GET['action']) ? $_GET['action'] : "trangchu";

    switch ($act) {
        case 'trangchu':
            require_once('controller/home_controller.php');
            break;
        
        case 'cuahang':
            require_once('controller/cuahang_controller.php');
            # code...
            break;
        case 'giohang':
            require_once('controller/giohang_controller.php');
            # code...
            break;
        case 'gioithieu':
            require_once('controller/gioithieu_controller.php');
            # code...
            break;
        case 'chitietmathang':
            require_once('controller/chitietmathang_controller.php');
            # code...
            break;
        case 'dangnhap':
            require_once('controller/dangnhap_controller.php');
            # code...
            break;
        case 'quenmatkhau':
            require_once('controller/quenmatkhau_controller.php');
            # code...
            break;
        case 'thanhtoan':
            require_once('controller/thanhtoan_controller.php');
            # code...
            break;
        case 'hoanthanhdonhang':
            require_once('controller/hoanthanhdonhang_controller.php');
            # code...
            break;

        default:
            # code...
            break;
    }
?>