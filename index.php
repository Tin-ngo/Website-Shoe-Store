<?php
    session_start();
    $act = isset($_GET['action']) ? $_GET['action'] : "trangchu";
  

    switch ($act) {
        //trang chủ có sẵn trang san pham moi nhất nhưng không thêm vô
        case 'trangchu':    //xong      
            require_once('controller/home_controller.php');
            $index = new showhome();
            $index->list();
            break;
        
        case 'cuahang':  //đang
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;

        case 'cuahang1':  //đang
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list1();
            break;
        

     
         
//đăng nhập đăng ký, chưa xong

        case 'dangky_xl':
            require_once('controller/dangnhap_controller.php');
            $index = new dangnhap_dangky_controller();
            $index->dangky();
            break;

        case 'dangnhap_xl':
            require_once('controller/dangnhap_controller.php');
            $index = new dangnhap_dangky_controller();
            $index->dangnhap();
            break;
        case 'dangxuat':
            require_once('controller/dangnhap_controller.php');
            $index = new dangnhap_dangky_controller();
            $index->dangxuat();
            break;

        case 'taikhoan':    //CHƯA LÀM
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;
    




//đang làm
        case 'chitietmathang':   //đnag làm
            require_once('controller/chitietmathang_controller.php');
            $index = new chitietmathang();
            $index->chitiet_hang();
            break;
            
        case 'giohang':   //đâng làm
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;








        case 'gioithieu':
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;
        

        // lấy chức năng của cuahang controller cũng đưuọc
        case 'dangnhap':
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;
        case 'quenmatkhau':
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;
        case 'thanhtoan':
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;
        case 'hoanthanhdonhang':
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;

        default:
            # code...
            break;




    }
?>