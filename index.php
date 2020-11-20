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

        // id hiển thị theo id loại sản phẩm

     
        case '1':  //đang   
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list_theoid();
            break;
        case '2':  //đang   
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list_theoid();
            break;
        case '3':  //đang   
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list_theoid();
            break;
        case '4':  //đang   
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list_theoid();
            break;
        case '5':  //đang   
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list_theoid();
            break;
        case '6':  //đang   
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list_theoid();
            break;

    


        case 'giohang':
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;
        case 'gioithieu':
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;
        case 'chitietmathang':
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