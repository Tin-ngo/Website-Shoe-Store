<div class="recommended_items"><!--recommended_items-->
   <div class="container spnb">
                        <h2 class="title text-left" id="makm">SẢN PHẨM LIÊN QUAN
                            <a href="#" class="pull-right" id="textid">Xem tất cả >></a>
                        </h2>
   
                        
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">


                            <div class="carousel-inner">

                                <div class="item active"> 

                                <?php foreach ($data_sanphamlienquan as $value) { ?>
                                    
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/recommend1.jpg" alt="" />
                                                    <h2><?php echo $value['Dongia']?></h2>
                                                    <p></p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                <?php  } ?>
                                   



                    <!-- class item để chạy sldie -->



                                <div class="item">  

                                     <?php foreach ($data_sanphamlienquan as $value) { ?>

                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/recommend1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p></p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                <?php  } ?>


                                    
                                </div>





                            </div>


                            <!-- 2 mũi tên trong slide -->


                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>  


                        </div>
                    </div><!--/recommended_items-->


</div> <!-- div container -->

<div class="container container2">

        <button type="button" class="btn btn-primary btn-lg btn-block">
        <a href="?action=cuahang">XEM NHIỀU SẢN PHẨM HƠN</a>
        </button>

    </div>