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
    }
?>