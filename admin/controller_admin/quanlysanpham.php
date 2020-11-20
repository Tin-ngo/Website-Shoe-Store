<?php      
     // CONTROLLER DÙNG ĐỂ GỌI CÁC HÀM TRONG MODEL


    require_once('./model_admin/sanpham.php'); // đã gọi được rồi

    /**
     * 
     */
    class sanphamcontroller
    {
    	var $sanpham_model;

    	public function __construct()
    	{
    		$this->sanpham_model = new sanpham();
    	}

    	public function list()   // hàm hiển thị tất cả sản phẩm trong database 
    	{
    		$data = $this->sanpham_model->all();
    		require_once('views_admin/index.php');
    	}

    	 public function details()  // hàm hiển thị chi tiết thông tin của một sản phẩm được chọn bởi $id
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->sanpham_model->find($id);
            require_once('views_admin/index.php');
        } 

      
        

        public function update()                            
       {
             $tenSP = filter_input(INPUT_POST, 'tenSP');
             $Dongia =filter_input(INPUT_POST, 'Dongia');
            
            $anh1 = $_FILES['anh1']['name'];
             $anh1_tmp = $_FILES['anh1']['tmp_name'];
             move_uploaded_file($anh1_tmp, './public_admin/sanpham/image/'.$anh1);

             $anh2 = $_FILES['anh2']['name'];
             $anh2_tmp = $_FILES['anh2']['tmp_name'];
             move_uploaded_file($anh2_tmp, './public_admin/image/sanpham'.$anh2);

             $anh3 = $_FILES['anh3']['name'];
             $anh3_tmp = $_FILES['anh3']['tmp_name'];
             move_uploaded_file($anh3_tmp, './public_admin/image/sanpham'.$anh3);
             
             $mau =filter_input(INPUT_POST, 'mau');
             $size =filter_input(INPUT_POST, 'size');
             $ngaynhap =filter_input(INPUT_POST, 'ngaynhap');
             $mota =filter_input(INPUT_POST, 'mota');

            $idSP = filter_input(INPUT_POST, 'idSP');

            $this->sanpham_model->update($idSP, $tenSP, $Dongia, $anh1, $anh2, $anh3, $mau, $size, $ngaynhap, $mota);

         }


         public function them()  
         {
            $idLoaiSP =filter_input(INPUT_POST, 'idLoaiSP');
            $tenSP = filter_input(INPUT_POST, 'tenSP');
             $Dongia =filter_input(INPUT_POST, 'Dongia');
// lấy ảnh
             $anh1 = $_FILES['anh1']['name'];
             $anh1_tmp = $_FILES['anh1']['tmp_name'];
             move_uploaded_file($anh1_tmp, './public_admin/sanpham/image/'.$anh1);

             $anh2 = $_FILES['anh2']['name'];
             $anh2_tmp = $_FILES['anh2']['tmp_name'];
             move_uploaded_file($anh2_tmp, './public_admin/image/sanpham'.$anh2);

             $anh3 = $_FILES['anh3']['name'];
             $anh3_tmp = $_FILES['anh3']['tmp_name'];
             move_uploaded_file($anh3_tmp, './public_admin/image/sanpham'.$anh3);

             $mau =filter_input(INPUT_POST, 'mau');
             $size =filter_input(INPUT_POST, 'size');
             $ngaynhap =filter_input(INPUT_POST, 'ngaynhap');
             $mota =filter_input(INPUT_POST, 'mota');

            $this->sanpham_model->insert( $idLoaiSP,$tenSP, $Dongia, $anh1, $anh2, $anh3, $mau, $size, $ngaynhap, $mota);
         }


         public function xoasanpham()                          //dang
         {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';

            $this->sanpham_model->delete($id);
         }










       }

       
    


?>