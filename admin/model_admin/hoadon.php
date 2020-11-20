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

                echo "<script> alert('Đã xóa thành công');";
                echo "location.href='?action=hoadon';</script>";

            }else{
                echo "<script> alert('LỖI, Chưa xóa được sản phẩm');";
                echo "location.href='?action=hoadon';</script>";
            }
         }

  //       function Join_user_hoadon($id)
  //       {
  //           $query = "SELECT * FROM user INNER JOIN hoadon ON user.idUser = hoadon.idUser WHERE user.idUser=$id";
//
  //          $result = $this->conn->query($query);

       //  }





    }
     
?>