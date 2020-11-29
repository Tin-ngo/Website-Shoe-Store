<?php      
     // CONTROLLER DÙNG ĐỂ GỌI CÁC HÀM TRONG MODEL


    require_once('./model_admin/hoadon.php'); // đã gọi được rồi

    /**
     * 
     */
    class hoadoncontroller
    {
    	var $hoadon_model;

    	public function __construct()
    	{
    		$this->hoadon_model = new hoadon();
    	}

    	public function list()
    	{
    		 if(isset($_POST['timkiem_hd'])){
                $timkiem_hd = $_POST['timkiem_hd'];
                $data = $this->hoadon_model->timkiem_hd($timkiem_hd);
            }else{
                $data = $this->hoadon_model->all();
            }
            require_once('views_admin/index.php');
    	}

    	 public function details() //đang
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->hoadon_model->find($id);
            require_once('views_admin/index.php');
        } 

      

         public function xoahoadon()    //chưa
         {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';

            $this->hoadon_model->delete($id);
         }

         public function chitiet_hoadon()
         {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';

            $data = $this->hoadon_model->find($id);

            $name_user = $this->hoadon_model->user($id);

            $name_sanpham = $this->hoadon_model->sanpham($id);

            require_once('views_admin/index.php');
            
         }




       }

?>