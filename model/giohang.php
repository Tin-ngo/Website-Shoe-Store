<?php
    require_once('ketnoi.php');

    /**
     * 
     */
    class giohang
    {
    	var $conn;
    	function __construct()
    	{
    		$connect_obj = new ketnoi();
    		$this->conn = $connect_obj->connect;
    	}

        


         function loaisanpham()  //đang
          {
               $query = "SELECT * from loaisanpham";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }



          function chitiet_sp($id)
        {
            $query = "SELECT * FROM sanpham WHERE idSP = $id ";
            return $this->conn->query($query)->fetch_assoc();
        }



        

    	function them_giohang($id, $soluong)
    	{
   //         global $sanpham;
   //         if($soluong < 1) return;

  //          if(isset($_SESSION['giohang']['$id'])){
  //              $soluong += $_SESSION['giohang']['$key']['sl'];
  //              capnhat($key, $soluong);
  //              return;
  //          }
//
            //thêm sản phẩm
//
 //           $gia = $_SESSION['giohang']['gia'];
 //           $tongtien = $gia * $soluong;
 //           $item = 
 
    	}

    	function update_giohang()
    	{

    	}

    	function get_tongtien()
    	{

    	}

    	function sosanh_sapxep()
    	{

    	}

    	function sapxep()
    	{
    		
    	}
    }
?>