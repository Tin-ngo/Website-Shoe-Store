<?php    
                                       // MODEL CHO CÁC THÔNG TIN SẢN PHẨM
    require_once('ketnoi.php');

    /**
     * 
     */
    class sanpham
    {
    	var $conn;
    	
    	function __construct()
    	{
    		$connect_obj = new ketnoi();
    		$this->conn = $connect_obj->connect;
    	}
    	
    	function all()
    	{
    		$query = "SELECT * FROM sanpham ORDER BY idSP";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}

    	function find($id)
        {
            $query = "SELECT * FROM sanpham WHERE idSP=$id";
            return $this->conn->query($query)->fetch_assoc();
        }


         function update($idSP, $tenSP, $Dongia, $anh1, $anh2, $anh3, $mau, $size, $ngaynhap, $mota) 
        {
            

     
             $query="UPDATE sanpham SET tenSP='$tenSP', Dongia='$Dongia', anh1='$anh1', anh2='$anh2', anh3='$anh3', mau='$mau', size='$size', ngaynhap='$ngaynhap', mota='$mota' WHERE idSP='$idSP';";        

            $result = $this->conn->query($query);

            if($result == true){

                header('Location: ?action=sanpham');
            }
        

         }

         function insert($idLoaiSP, $tenSP, $Dongia, $anh1, $anh2, $anh3, $mau, $size, $ngaynhap, $mota) 
         {

             $query= "INSERT INTO sanpham (idLoaiSP, tenSP, Dongia, anh1, anh2, anh3, mau, size, ngaynhap, mota) 
            VALUES ('$idLoaiSP', '$tenSP', '$Dongia', '$anh1', '$anh2', '$anh3', '$mau', '$size', '$ngaynhap', '$mota') ";

            $result = $this->conn->query($query);

            if($result == true){
                header('location: ?action=sanpham');
            }
            else{
                header('location: ?action=them_sanpham_giaodien');
            }
         }

         function delete($id)        //dang
         {
            $query = "DELETE FROM sanpham WHERE idSP='$id' ";
            $result = $this->conn->query($query);

            if($result == true){

                echo "<script> alert('Đã xóa thành công');";
                echo "location.href='?action=sanpham';</script>";

            }else{
                echo "<script> alert('LỖI, Chưa xóa được sản phẩm');";
                echo "location.href='?action=sanpham';</script>";
            }
         }





    }
     
?>