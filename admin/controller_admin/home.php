<?php      
     // CONTROLLER DÙNG ĐỂ GỌI CÁC HÀM TRONG MODEL


    require_once('./model_admin/trangchu.php'); // đã gọi được rồi

    /**
     * 
     */
    class trangchucontroller
    {
    	var $trangchu_model;

    	public function __construct()
    	{
    		$this->trangchu_model = new trangchu();
    	}

    	public function dem()  
    	{
    		$data_user = $this->trangchu_model->all_user();
    
    		$data_sanpham = $this->trangchu_model->all_sanpham();

    		$data_loaisanpham = $this->trangchu_model->all_loaisanpham();

    		$data_hoadon = $this->trangchu_model->all_hoadon();

    		$data_banner = $this->trangchu_model->all_banner();

    		$data_khuyenmai = $this->trangchu_model->all_khuyenmai();



    		require_once('views_admin/index.php');
    	}

       



       }

       
    


?>