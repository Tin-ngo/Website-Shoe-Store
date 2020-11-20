<?php
     require_once('ketnoi.php');

     /**
      * 
      */
     class cuahang
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

          function sanpham_cuahang()  //đang
          {
               $query = "SELECT * from sanpham";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }



           function sanpham_cuahangtheoid($idLoaiSP)  //đang
          {
               $query = "SELECT * FROM sanpham WHERE idLoaiSP = $idLoaiSP";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;


          }



     }
?>