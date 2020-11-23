<?php
     require_once('./model/dangnhap.php');

     /**
      * 
      */
     class dangnhap_dangky_controller
     {
      var $dangnhap_dangky_model;
      
      function __construct()
      {
        $this->dangnhap_dangky_model = new dangnhap_dangky();
      }


          public function dangky()
         {
            $ho = filter_input(INPUT_POST, 'ho_dk');
            $ten =filter_input(INPUT_POST, 'ten_dk');
            $email =filter_input(INPUT_POST, 'email_dk');
            $diachi =filter_input(INPUT_POST, 'diachi_dk');
            $gioitinh =filter_input(INPUT_POST, 'gioitinh_dk');
            $sodienthoai =filter_input(INPUT_POST, 'sodienthoai_dk');
            $tendangnhap =filter_input(INPUT_POST, 'tendangnhap_dk');
            $matkhau =filter_input(INPUT_POST, 'matkhau_dk');

            $this->dangnhap_dangky_model->dangky_model($ho, $ten, $email, $diachi, $gioitinh, $sodienthoai, $tendangnhap, $matkhau);
         }

         public function dangnhap()
         {
         	$tendangnhap =filter_input(INPUT_POST, 'tendangnhap_dn');
            $matkhau =filter_input(INPUT_POST, 'matkhau_dn');

            $this->dangnhap_dangky_model->dangnhap_model($tendangnhap, $matkhau);


         }

         public function dangxuat()
         {
         	if(isset($_SESSION['tendangnhap'])){
         		unset($_SESSION['tendangnhap']);
         		echo "<script language='javascript'>alert('Đăng xuất thành công');";
			    echo "location.href='?action=trangchu';</script>";
         	}
         	if (isset($_SESSION['matkhau'])) {
         		unset($_SESSION['matkhau']);
         		echo "<script language='javascript'>alert('Đăng xuất thành công');";
			    echo "location.href='?action=trangchu';</script>";
         	}
            
         }


          





     }
?>