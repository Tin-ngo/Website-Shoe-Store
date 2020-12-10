<?php
     require_once('ketnoi.php');

     /**
      * 
      */
     class Matkhau
     {
      var $conn;
      
      function __construct()
      {
        $connect_obj = new ketnoi();
        $this->conn = $connect_obj->connect;
      }


          function loaisanpham()  //đang
          {
               $query = "SELECT * from loaisanpham limit 0,4";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }

          function laymatkhau($email)
          {
            $query = "SELECT matkhau FROM user WHERE email = '$email' ";
            return $this->conn->query($query)->fetch_assoc();
    //        echo "<script language='javascript'>";
    //        echo "location.href='?action=quenmk';</script>";
          }



     


     }
?>