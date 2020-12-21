<?php    
                                       // MODEL CHO CÁC THÔNG TIN SẢN PHẨM
    require_once('ketnoi.php');

    /**
     * 
     */
    class hoadon
    {
    	var $conn;
    	
    	function __construct()
    	{
    		$connect_obj = new ketnoi();
    		$this->conn = $connect_obj->connect;
    	}
    	
    	function all()
    	{
    		$query = "SELECT * FROM hoadon ORDER BY idhoadon";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}


         function timkiem_hd($timkiem_hd)
        {
            $query = "SELECT * FROM hoadon WHERE idUser LIKE '%$timkiem_hd%' ORDER BY idhoadon";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }




    	function find($id)   
        {
            $query = "SELECT * FROM hoadon WHERE idhoadon=$id";
            return $this->conn->query($query)->fetch_assoc();
        }


         function delete($id)        //đang
         {
            $query = "DELETE FROM hoadon WHERE idhoadon='$id' ";
            $result = $this->conn->query($query);

            if($result == true){

                echo "<script>";
                echo "location.href='?action=hoadon';</script>";

            }else{
                echo "<script> ";
                echo "location.href='?action=hoadon';</script>";
            }
         }


         //duyệt hóa đơn
          function duyet_hoadon($id)        //đang
         {
            $query = "UPDATE hoadon SET trangthai = 1 WHERE idhoadon = '$id' ";

            $result = $this->conn->query($query);

            if($result == true){

                echo "<script>";
                echo "location.href='?action=hoadon';</script>";

            }else{
                echo "<script> ";
                echo "location.href='?action=hoadon';</script>";
            }
         }

// trừ số lượng sản phẩm
          function sanpham_tru($id)     
         {
            $query = "UPDATE sanpham SET soluong = soluong-1 WHERE idSP = '$id'";
            
            $result = $this->conn->query($query);

            if($result == true){

                echo "<script>";
                echo "location.href='?action=hoadon';</script>";

            }else{
                echo "<script> ";
                echo "location.href='?action=hoadon';</script>";
            }
         }




         //xem chi tiết hóa đơn

         function user($id)
         {
             $query = "SELECT * FROM user WHERE idUser=$id";

            return $this->conn->query($query)->fetch_assoc();

         }

         function sanpham($id)
         {
             $query = "SELECT * FROM sanpham WHERE idSP=$id";

             return $this->conn->query($query)->fetch_assoc();

         }







    }
     
?>