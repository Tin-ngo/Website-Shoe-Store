<?php 
    class connection{
        var $ketnoi;
        function __construct()
        {
            //Thong so ket noi CSDL
            $severname ="localhost"; 
            $username ="root";
            $password =""; 
            $db_name ="Shoe";
 
            //Tao ket noi CSDL
            $this->ketnoi = new mysqli($severname,$username,$password,$db_name);
            $this->ketnoi->set_charset("utf8");

            //check connection
            if ($this->ketnoi->connect_error) {
            	$database_error = "Lỗi kết nối với database!";
		        die("Connection failed: " . $this->ketnoi->connect_error);
		        echo $database_error;
		    }
        }

    }
?>