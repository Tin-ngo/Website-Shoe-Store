<?php
    require_once('ketnoi.php');

    /**
     * 
     */
    class giohang
    {
    	var $conn;
    	function __construct()
    	{
    		$connect_obj = new ketnoi();
    		$this->conn = $connect_obj->connect;
    	}

    	function them_giohang($key, $soluong)
    	{
            global $sanpham;
            if($soluong < 1) return;

            if(isset($_SESSION['giohang']['$key'])){
                $soluong += $_SESSION['giohang']['$key']['sl'];
                capnhat($key, $soluong);
                return;
            }

            //thêm sản phẩm

            $gia = $_SESSION['giohang']['gia'];
            $tongtien = $gia * $soluong;
            $item = 
 
    	}

    	function update_giohang()
    	{

    	}

    	function get_tongtien()
    	{

    	}

    	function sosanh_sapxep()
    	{

    	}

    	function sapxep()
    	{
    		
    	}
    }
?>