<?php
   //    require_once('views/index.php');    gọi câu mới xuất hiện giao diện được

    require_once('./model/show_cuahang.php');

    /**
     * 
     */
    class showcuahang
    {
    	var $banner_controller;
    	
    	function __construct()
    	{
    		$this->home_controller = new cuahang();
    	}
        
        public function list()
        {

            $data_loaisanpham = $this->home_controller->loaisanpham();

            $data_sanphamcuahang = $this->home_controller->sanpham_cuahang();


        	require_once('views/index.php');
        }


        public function list_theoid()
        {

        	$data_loaisanpham = $this->home_controller->loaisanpham();

        	$idLoaiSP = $_GET['id'] ? $_GET['id'] : '1';
            $data_sanphamcuahang = $this->home_controller->sanpham_cuahangtheoid($idLoaiSP);

            require_once('views/index.php');
        }

    }
?>