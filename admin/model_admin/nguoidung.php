<?php
    require_once('ketnoi.php');
    /**
     * 
     */
    class nguoidung
    {
    	var $conn;

    	function __construct()
    	{
    		$connect_obj = new ketnoi();
            $this->conn = $connect_obj->connect;
    	}

    	function all()
    	{
    		$query = "SELECT * FROM user ORDER BY idUser";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}
        function find($id)
        {
            $query = "SELECT * FROM user WHERE idUser=$id";
            return $this->conn->query($query)->fetch_assoc();
        }

        function update($idUser, $ho, $ten, $email, $diachi, $gioitinh, $sodienthoai, $tendangnhap, $matkhau)
        {
            

     
             $query="UPDATE user SET ho='$ho',ten='$ten',email='$email', diachi='$diachi', gioitinh='$gioitinh', sodienthoai='$sodienthoai', tendangnhap='$tendangnhap', matkhau='$matkhau' WHERE idUser='$idUser';";        

            $result = $this->conn->query($query);

            if($result == true){
                setcookie('msg', 'Duyệt thành công', time() + 2);
                header('Location: ?action=taikhoan');
            }
        


       //$uup=mysql_query($sl);

         }


}

?>