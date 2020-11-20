
<?php require_once('./views/slider/slider.php');  ?>

<div class="divhover">
<?php foreach ($data_loaisanpham as $value) {  ?>

<div class="col-sm-3">
    <div class="zoom">
        <center><span style="font-size: 20px;"><?php echo $value['tenLSP'] ?></span></center>
        <img class="imghover1" src="admin/public_admin/image/loaisanpham/<?php echo $value['hinhanh'] ?>">
    </div>
</div>

<?php }  ?>

</div>



<div class="container cn2">
<div class="row">

               

                     <div class="col-sm-12 c_cn2">
                   <!-- hiển thị sản phẩm -->

                    <div class="features_items"><!--features_items-->
                       
                        <h2 class="title text-left" id="makm">SẢN PHẨM NỔI BẬT
                            <a href="?action=cuahang" class="pull-right" id="textid">Xem tất cả >></a>
                        </h2>
                   
                   <?php foreach ($data_sanphamtrangchu as $value) {  ?>
                    
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="admin/public_admin/image/sanpham/<?php echo $value['anh1'] ?>" height='200'/>
                                            <h2> <?php echo "$".$value['Dongia'] ?> </h2>
                                            <p> <?php echo $value['tenSP'] ?> </p>
                                            <a href="?action=giohang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem Chi Tiết</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo "$".$value['Dongia'] ?> </h2>
                                                <p>CHỗ này hiển thị mã khuyến mãi</p>
                                                <a href="?action=giohang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem Chi Tiết</a>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>

                       <?php } ?>
                        
                    </div><!--features_items-->








                </div>


</div>   <!-- div row -->
</div> <!-- div container -->



 <div class="khuyenmai">
    <div class="col-sm-12">
           <h2>Khuyến Mãi Hấp Dẫn Lên Đến 30%</h2>
          <center><button type="button" class="btn btn-outline-primary"><a href="#">Mua Ngay</a></button> </center>
    </div>

 </div>

 <!-- <?php// require_once('./views/sanphammoinhat/sanphammoinhat.php');  ?>  -->