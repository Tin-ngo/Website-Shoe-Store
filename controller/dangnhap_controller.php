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
            $matkhau = filter_input(INPUT_POST, 'matkhau_dk');
          //  $matkhau = md5("$mk");  mã hóa mật khẩu

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
                unset($_SESSION['matkhau']);
         		echo "<script language='javascript'></script>";   //alert('Đăng xuất thành công');
			    echo "<script language='javascript'>location.href='?action=trangchu';</script>";
         	}
         
            
         }

         public function taikhoan()
         {

            $data_loaisanpham = $this->dangnhap_dangky_model->loaisanpham();



            $tendangnhap = $_SESSION['tendangnhap'];
            
            $data_taikhoan = $this->dangnhap_dangky_model->taikhoan($tendangnhap);

            require_once('views/index.php');
         }


         public function suataikhoan()
         {
            $ho = filter_input(INPUT_POST, 'ho');
            $ten =filter_input(INPUT_POST, 'ten');
            $email =filter_input(INPUT_POST, 'email');
            $diachi =filter_input(INPUT_POST, 'diachi');
            $gioitinh =filter_input(INPUT_POST, 'gioitinh');
            $sodienthoai =filter_input(INPUT_POST, 'sodienthoai');
            $tendangnhap =filter_input(INPUT_POST, 'tendangnhap');
            $matkhau =filter_input(INPUT_POST, 'matkhau');

            $idUser = filter_input(INPUT_POST, 'idUser');

            $this->dangnhap_dangky_model->suataikhoan($idUser, $ho, $ten, $email, $diachi, $gioitinh, $sodienthoai, $tendangnhap, $matkhau);

            require_once('views/index.php');
         }


          





     }
?>