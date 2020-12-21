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

        function phantrang()
        {
            $query = "SELECT * FROM sanpham";
            return $this->conn->query($query);
        }
        function phantrang_timkiem()
        {
            $query = "SELECT * FROM sanpham WHERE tenSP LIKE '%$timkiem_sp%'";
            return $this->conn->query($query);
        }

    	
    	function all($batdau, $gioihan)
    	{
            
    		$query = "SELECT * FROM sanpham LIMIT $batdau, $gioihan";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}

        function timkiem_sp($timkiem_sp, $batdau, $gioihan)
        {
            $query = "SELECT * FROM sanpham WHERE tenSP LIKE '%$timkiem_sp%' LIMIT $batdau, $gioihan";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }



 //đang sửa chỗ này
        function xem_mau($id)
        {
             $query = "SELECT * FROM color WHERE idcolor=$id" ;   //sai
             return $this->conn->query($query)->fetch_assoc();
        }
        function xem_size($id)
        {
             $query = "SELECT * FROM size WHERE idsize=$id";
            return $this->conn->query($query)->fetch_assoc();
        }

    	function find($id)
        {
            $query = "SELECT * FROM sanpham WHERE idSP=$id";
            return $this->conn->query($query)->fetch_assoc();
        }


         function update($idSP, $idKM, $idLoaiSP, $idcolor, $idsize, $tenSP, $Dongia, $anh1, $anh2, $anh3, $ngaynhap, $mota, $soluong) 
        {
            

     
             $query="UPDATE sanpham SET idKM='$idKM', idLoaiSP='$idLoaiSP', idcolor='$idcolor', idsize='$idsize', tenSP='$tenSP', Dongia='$Dongia', anh1='$anh1', anh2='$anh2', anh3='$anh3', ngaynhap='$ngaynhap', mota='$mota', soluong='$soluong' WHERE idSP='$idSP';";        

            $result = $this->conn->query($query);

            if($result == true){

                header('Location: ?action=sanpham');
            }
        

         }

         function insert($idKM, $idLoaiSP, $idcolor, $idsize, $tenSP, $Dongia, $anh1, $anh2, $anh3, $ngaynhap, $mota, $soluong) 
         {

             $query= "INSERT INTO sanpham (idKM, idLoaiSP, idcolor, idsize, tenSP, Dongia, anh1, anh2, anh3, ngaynhap, mota, soluong) 
            VALUES ('$idKM','$idLoaiSP','$idcolor', '$idsize', '$tenSP', '$Dongia', '$anh1', '$anh2', '$anh3', '$ngaynhap', '$mota', '$soluong') ";

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

                echo "<script> ";
                echo "location.href='?action=sanpham';</script>";

            }else{
                echo "<script>  ";
                echo "location.href='?action=sanpham';</script>";
            }
         }

         function khuyenmai()
         {

            $query = "SELECT * FROM khuyenmai";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;

         }





    }
     
?>