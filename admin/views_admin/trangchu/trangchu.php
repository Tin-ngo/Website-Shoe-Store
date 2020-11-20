<div id="viewport">

<div class="container-fluid" id="noidung">


      <h1>TRANG CHỦ</h1>
      <br>
     <div class="col-sm-4">
          <div class="div1">
               <?php
               $sum_user = 0;

                      foreach( $data_user as $value )
                     {
                       $sum_user +=1;
                        }
                        echo "Tổng tài khoản hiện có là: ". $sum_user;
                      ?>
          </div>
     </div>
     <div class="col-sm-4">
          <div class="div1">
               <?php
               $sum_sanpham = 0;

                      foreach( $data_sanpham as $value )
                     {
                       $sum_sanpham +=1;
                        }
                        echo "Tổng sản phẩm hiện có là: ". $sum_sanpham;
                      ?>
          </div>
     </div>
     <div class="col-sm-4">
          <div class="div1">
               <?php
               $sum_loaisanpham = 0;

                      foreach( $data_loaisanpham as $value )
                     {
                       $sum_loaisanpham +=1;
                        }
                        echo "Tổng Loại sản phẩm hiện có là: ". $sum_loaisanpham;
                      ?>
          </div>
     </div>
     <div class="col-sm-4">
          <div class="div1">
               <?php
               $sum_hoadon = 0;

                      foreach( $data_hoadon as $value )
                     {
                       $sum_hoadon +=1;
                        }
                        echo "Tổng hóa đơn hiện có là: ". $sum_hoadon;
                      ?>
          </div>
     </div>
     <div class="col-sm-4">
          <div class="div1">
                <?php
               $sum_banner = 0;

                      foreach( $data_banner as $value )
                     {
                       $sum_banner +=1;
                        }
                        echo "Tổng banner hiện có là: ". $sum_banner;
                      ?>
          </div>
     </div>
     <div class="col-sm-4">
          <div class="div1">
               <?php
               $sum_khuyenmai = 0;

                      foreach( $data_khuyenmai as $value )
                     {
                       $sum_khuyenmai +=1;
                        }
                        echo "Tổng các khuyến mãi hiện có là: ". $sum_khuyenmai;
                      ?>
          </div>
     </div>

</div>

</div>