<?php      
     // CONTROLLER DÙNG ĐỂ GỌI CÁC HÀM TRONG MODEL


    require_once('./model_admin/banner.php'); // đã gọi được rồi

    /**
     * 
     */
    class bannercontroller
    {
    	var $banner_model;

    	public function __construct()
    	{
    		$this->banner_model = new banner();
    	}

    	public function list()  
    	{
    		$data = $this->banner_model->all();
    		require_once('views_admin/index.php');
    	}

        public function details() 
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->banner_model->find($id);
            require_once('views_admin/index.php');
        }

       public function update()
       {
             $idbanner = filter_input(INPUT_POST, 'idbanner');
             
             $anh = $_FILES['anh']['name'];
             $anh_tmp = $_FILES['anh']['tmp_name'];
             move_uploaded_file($anh_tmp, './public_admin/image/banner/'.$anh);

            $this->banner_model->update($idbanner, $anh);

         }


         public function them()
         {
            $idbanner = filter_input(INPUT_POST, 'idbanner');
             $anhbanner = $_FILES['anhbanner']['name'];
             $anhbanner_tmp = $_FILES['anhbanner']['tmp_name'];
             move_uploaded_file($anhbanner_tmp, './public_admin/image/banner/'.$anhbanner);

            $this->banner_model->insert($idbanner, $anhbanner);
         }


         public function xoabanner() 
         {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';

            $this->banner_model->delete($id);
         }







       }

       
    


?>