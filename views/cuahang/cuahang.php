<div class="cuahang">
<h1>Cửa Hàng</h1>
</div>

<section id="cart_items" style="margin-top: -50px; margin-bottom: -50px;">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Cửa hàng</li>
                </ol>
            </div>
        </div>
    </section>

<div class="container cn2">
<div class="row">

                <div class="col-sm-3">
                    <div class="left-sidebar">

                        <h2>Thể Loại</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                            <?php foreach ($data_loaisanpham as $value) {  ?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="?action=cuahang&id=<?= $value['idLoaiSP'] ?>">
                                            <?= $value['tenLSP'] ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>

                        <?php } ?>


                        </div>

                    </div>




        <div class="chongia">
            <div class="chongia2">

               <div class="dropdown" style="float:left;">
                 <button class="dropbtn">Màu</button>
                 <div class="dropdown-content" style="left:0;">
                 <table>
             <?php foreach ($color as $value) {   ?>
  
                     <tr>
                        <td>
                            <a href="?action=cuahang&idmau=<?= $value['idcolor'] ?>" class="acolor"><?php echo $value['color']; ?></a>
                        </td>
                     </tr>

             <?php } ?>   
                 </table>
                 </div>
               </div>
                <div class="dropdown" style="margin-left: 9px;">
                 <button class="dropbtn">Size</button>
                 <div class="dropdown-content" style="left:-50px;">

                 <table>
             <?php foreach ($size as $value) {   ?>
  
                     <tr>
                        <td>
                            <a href="?action=cuahang&idsize=<?= $value['idsize'] ?>" class="acolor"><?php echo $value['size']; ?></a>
                        </td>
                     </tr>

             <?php } ?>   
                 </table>

                 </div>
               </div>
               <div class="dropdown" style="float:right;">
                <button class="dropbtn">Giá</button>
                 <div class="dropdown-content" style="padding: 5px;">

                 <input type="radio" id="age1" name="age" value="30">
                 <label for="age1">100.000 - 300.000 vnd</label><br>
                 <input type="radio" id="age2" name="age" value="60">
                 <label for="age2">300.000 - 500.000 vnd</label><br>  
                 <input type="radio" id="age3" name="age" value="100">
                 <label for="age3">500.000 - 700.000 vnd</label><br>
                 <input type="radio" id="age3" name="age" value="100">
                 <label for="age3">700.000 - 1000.000vnd</label><br>
                 <input type="radio" id="age3" name="age" value="100">
                 <label for="age3">1000.000 vnd trở lên</label><br>
                 <center>
                 <input type="submit" value="Tìm Kiếm">
                 </center>

                 </div>
               </div>

        </div>

                    </div>


            <br>
            <br>

                    
   </div>  <!-- div thứ 3 -->






                     <div class="col-sm-9 padding-right c_cn2">
                   <!-- hiển thị sản phẩm -->

                    <div class="features_items"><!--features_items-->
                       
                        <h2 class="title text-center">SHOE - STORE</h2>
                        
<?php foreach ($data_sanphamcuahang as $value) { ?>

<div class="col-sm-3">
                            <div class="single-product">
                                            <div class="product-f">
                                                <a href="#"><img src="admin/public_admin/image/sanpham/<?php echo $value['anh1'] ?>" alt="Product Title" class="img-products" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i style="font-size: 25px; text-align: center;" class="fa fa-shopping-cart"></i></a>
                                                    <a href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>" data-toggle="modal" ><i style="font-size: 25px; text-align: center;" class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#"><center> <?php echo $value['tenSP'] ?> </center></a></p>
                                                <span><center><?php echo "$".$value['Dongia'] ?></center></span>
                                            </div>
                                        </div>
                        </div>

   <?php } ?>
                    </div><!--features_items-->

                    <!-- 
                        <ul class="pagination">
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">&raquo;</a></li>
                        </ul>
                    -->
                </div>


</div>   <!-- div row -->

</div>


<br>
<br>
<br>
<br>
<br>
