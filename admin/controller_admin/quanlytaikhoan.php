<?php

    require_once('./model_admin/nguoidung.php'); // đã gọi được rồi

    /**
     * 
     */
    class nguoidungcontroller
    {
    	var $nguoidung_model;

    	public function __construct()
    	{
    		$this->nguoidung_model = new nguoidung();
    	}

    	public function list()   // hàm hiển thị tất cả tài khoản người dùng trong database 
    	{
    		$data = $this->nguoidung_model->all();
    		require_once('views_admin/index.php');
    	}

        public function details()  // hàm hiển thị chi tiết thông tin của một người dùng được chọn bởi $id
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->nguoidung_model->find($id);
            require_once('views_admin/index.php');
        }
    }





    
?>