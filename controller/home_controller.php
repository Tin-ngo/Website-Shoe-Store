<?php
   //    require_once('views/index.php');    gọi câu mới xuất hiện giao diện được

    require_once('./model/show_home.php');

    /**
     * 
     */
    class showhome
    {
    	var $banner_controller;
    	
    	function __construct()
    	{
    		$this->home_controller = new home();
    	}
        
        public function list()
        {
        	$data_banner = $this->home_controller->banner();

            $data_loaisanpham = $this->home_controller->loaisanpham();

            $data_sanphamtrangchu = $this->home_controller->sanpham_trangchu();


        	require_once('views/index.php');
        }

    }
?>