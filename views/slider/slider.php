
<!-- slide chạy tự động -->

<section id="slider"><!--slider-->

        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <?php foreach ($data_banner as $value) {  ?>
                                
                            <!-- php dưới đây để hiển thị bình thouwfng được slider với active -->
                            <div class="item <?php if($value['idbanner'] == 1) echo('active') ?>"> 
                                <div class="col-sm-6">
                                    <h1><span>SHOE</span> STORE</h1>
                                    <h2>UY TÍN - CHẤT LƯỢNG - THỜI THƯỢNG</h2>
                                   
                                    

                                     <a href="?action=chitietmathang">
                                    <button type="button" class="btn btn-secondary get">
                                     XEM NGAY
                                    </button>
                                     </a>



                                </div>
                                <div class="col-sm-6"> 
                                    <!-- 2 ảnh dưới chồng vào nhau -->
                                    <img src="admin/public_admin/image/banner/<?php echo $value['anh'] ?>" class="girl img-responsive"/>
                                    <img src=""  class="pricing" alt="" />
                                </div>
                            </div>

                        <?php }  ?>
                           
                            
                            
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left muiten"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right muiten"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->



