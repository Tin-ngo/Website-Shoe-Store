<?php
                                                //MODEL CHO TÀI KHOẢN NGƯỜI DÙNG
    require_once('ketnoi.php');
    /**
     * 
     */
    class dangnhap_dangky
    {
    	var $conn;

    	function __construct()
    	{
    		$connect_obj = new ketnoi();
            $this->conn = $connect_obj->connect;
    	}

         function dangky_model($ho, $ten, $email, $diachi, $gioitinh, $sodienthoai, $tendangnhap, $matkhau)
         {
            $query= "INSERT INTO user (ho, ten, email, diachi, gioitinh, sodienthoai, tendangnhap, matkhau) 
            VALUES ('$ho', '$ten', '$email', '$diachi', '$gioitinh', '$sodienthoai', '$tendangnhap', '$matkhau')";  

            $result = $this->conn->query($query);

            if($result == true){
                echo "<script> alert('ĐÃ ĐĂNG KÝ THÀNH CÔNG, BẠN SẼ ĐẾN TRANG ĐĂNG NHẬP');";
                echo "location.href='?action=dangnhap';</script>";
            }
            else{
                echo "<script> alert('ĐĂNG KÝ KHÔNG THÀNH CÔNG');";
                echo "location.href='?action=trangchu';</script>";
            }
         }


         function dangnhap_model($tendangnhap, $matkhau)
         {
            $query =" SELECT * FROM user where tendangnhap='".$tendangnhap."' and matkhau = '".$matkhau."' ";

            $result = $this->conn->query($query);

    	// $kq=mysqli_query($this->conn,$sl);
            $kq = $this->conn->query($query);

            $row=mysqli_fetch_array($kq);


            if(mysqli_num_rows($kq)>0)
            { 
         /*   echo "Chao ban ".$d['HoTen'];*/
                if($row['idQuyen'] == 1){
                	$_SESSION['admin'] = true;
                }else{
                    $_SESSION['admin'] = false;
                }
                

            $_SESSION['tendangnhap']=$tendangnhap;
            $_SESSION['matkhau']=$matkhau;
            echo "<script language='javascript'>alert('Dang nhap thanh cong');";
			echo "location.href='?action=trangchu';</script>";
            }
            else
            {
            echo "<script language='javascript'>alert('Dang nhap that bai');";
			echo "location.href='?action=dangnhap';</script>";
            }



         }

      

}

?>