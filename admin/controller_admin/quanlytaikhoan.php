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

        public function edit()
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->nguoidung_model->find($id);
            require_once('views_admin/index.php');
        }

       public function update()
       {
             $ho = filter_input(INPUT_POST, 'ho');
             $ten =filter_input(INPUT_POST, 'ten');
             $email =filter_input(INPUT_POST, 'email');
             $diachi =filter_input(INPUT_POST, 'diachi');
             $gioitinh =filter_input(INPUT_POST, 'gioitinh');
             $sodienthoai =filter_input(INPUT_POST, 'sodienthoai');
             $tendangnhap =filter_input(INPUT_POST, 'tendangnhap');
             $matkhau =filter_input(INPUT_POST, 'matkhau');

            $idUser = filter_input(INPUT_POST, 'id');

            $this->nguoidung_model->update($idUser, $ho, $ten, $email, $diachi, $gioitinh, $sodienthoai, $tendangnhap, $matkhau);


         
         }
       }

       
    


?>