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

            if(isset($_POST['timkiem_sp'])){
                $timkiem_sp = $_POST['timkiem_sp'];
                $data = $this->sanpham_model->timkiem_sp($timkiem_sp);
            }else{
                $data = $this->sanpham_model->all();
            }
            require_once('views_admin/index.php');

    	}




         function them_giaodien()
         {
            $data_km = $this->sanpham_model->khuyenmai();

            require_once('views_admin/index.php');
         }



    	 public function details()  // hàm hiển thị chi tiết thông tin của một sản phẩm được chọn bởi $id
        {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';
            $data = $this->sanpham_model->find($id);
            $data_mau = $this->sanpham_model->xem_mau($id);
            $data_size = $this->sanpham_model->xem_size($id);
            require_once('views_admin/index.php');
        } 

      
        

        public function update()                            
       {

            $idSP = filter_input(INPUT_POST, 'idSP');

            $idKM = filter_input(INPUT_POST, 'idKM');

            $idLoaiSP = filter_input(INPUT_POST, 'idLoaiSP');

            $idcolor = filter_input(INPUT_POST, 'idmau');

            $idsize = filter_input(INPUT_POST, 'idsize');

            $tenSP = filter_input(INPUT_POST, 'tenSP');

            $Dongia =filter_input(INPUT_POST, 'Dongia');
            
             $anh1 = $_FILES['anh1']['name'];
             $anh1_tmp = $_FILES['anh1']['tmp_name'];
             move_uploaded_file($anh1_tmp, './public_admin/image/sanpham/'.$anh1);

             $anh2 = $_FILES['anh2']['name'];
             $anh2_tmp = $_FILES['anh2']['tmp_name'];
             move_uploaded_file($anh2_tmp, './public_admin/image/sanpham/'.$anh2);

             $anh3 = $_FILES['anh3']['name'];
             $anh3_tmp = $_FILES['anh3']['tmp_name'];
             move_uploaded_file($anh3_tmp, './public_admin/image/sanpham/'.$anh3);
             
             $ngaynhap =filter_input(INPUT_POST, 'ngaynhap');
             
             $mota =filter_input(INPUT_POST, 'mota');

             $soluong =filter_input(INPUT_POST, 'soluong');

            

            $this->sanpham_model->update($idSP, $idKM, $idLoaiSP, $idcolor, $idsize, $tenSP, $Dongia, $anh1, $anh2, $anh3, $ngaynhap, $mota, $soluong);

         }


         public function them()  
         {
            $idLoaiSP =filter_input(INPUT_POST, 'idLoaiSP');

             $idKM =filter_input(INPUT_POST, 'idKM');


            $idcolor =filter_input(INPUT_POST, 'idmau');
             $idsize =filter_input(INPUT_POST, 'idsize');

            $tenSP = filter_input(INPUT_POST, 'tenSP');
             $Dongia =filter_input(INPUT_POST, 'Dongia');
// lấy ảnh
             $anh1 = $_FILES['anh1']['name'];
             $anh1_tmp = $_FILES['anh1']['tmp_name'];
             move_uploaded_file($anh1_tmp, './public_admin/image/sanpham/'.$anh1);

             $anh2 = $_FILES['anh2']['name'];
             $anh2_tmp = $_FILES['anh2']['tmp_name'];
             move_uploaded_file($anh2_tmp, './public_admin/image/sanpham/'.$anh2);

             $anh3 = $_FILES['anh3']['name'];
             $anh3_tmp = $_FILES['anh3']['tmp_name'];
             move_uploaded_file($anh3_tmp, './public_admin/image/sanpham/'.$anh3);

             $ngaynhap =filter_input(INPUT_POST, 'ngaynhap');
             $mota =filter_input(INPUT_POST, 'mota');
              $soluong =filter_input(INPUT_POST, 'soluong');


            $this->sanpham_model->insert($idKM, $idLoaiSP, $idcolor, $idsize, $tenSP, $Dongia, $anh1, $anh2, $anh3, $ngaynhap, $mota, $soluong);
         }




         // thêm mà nếu trùng tên, màu, size sản phẩm thì cộng thêm vào số lượng

         




















         public function xoasanpham()    
         {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';

            $this->sanpham_model->delete($id);
         }










       }

       
    


?>