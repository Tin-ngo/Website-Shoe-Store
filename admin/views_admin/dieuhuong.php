<?php
    $action = isset($_GET['action']) ? $_GET['action'] : "trangchu";    //   $_GET['']     lấy thông tin trên thanh địa chỉ

    switch ($action) {
    	case 'trangchu':
    		require_once('trangchu/trangchu.php');
    		break;
        case 'taikhoan':
            require_once('taikhoan/Quanlytaikhoan.php');
            break;
         case 'sanpham':
            require_once('sanpham/quanlysanpham.php');
            break;
        case 'loaisanpham':
            require_once('loaisanpham/quanlyloaisanpham.php');
            break;
        case 'hoadon':
            require_once('hoadon/quanlyhoadon.php');
            break;
        case 'danhmuc':
            require_once('danhmuc/quanlydanhmuc.php');
            break;
        case 'banner':
            require_once('banner/quanlybanner.php');
            break;
        case 'khuyenmai':
            require_once('khuyenmai/quanlykhuyenmai.php');
            break;
        case 'xemnguoidung':
            require_once('taikhoan/xem.php');
            break;
        case 'suanguoidung':
            require_once('taikhoan/sua.php');
            break;
        case 'them':
            require_once('taikhoan/them.php');
            break;
    	
    	default:
    		# code...
    		break;
    }
?>