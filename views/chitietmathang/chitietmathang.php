<!-- pages-title-start -->

    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2>Chỗ này để tên mặt hàng</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section id="cart_items" style="margin-top: -50px; margin-bottom: -50px;">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Chi Tiết mặt hàng</li>
                </ol>
            </div>
        </div>
    </section>





    <!-- pages-title-end -->
    <!-- product-details-section-start -->
    <div class="product-details pages section-padding-top">
        <div class="container">
            <div class="row">
                <div class="single-list-view">
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <div class="quick-image">
                            <div class="single-quick-image text-center">
                                <div class="list-img">
                                    <div class="product-f tab-content">
                                     
                                            <div class="simpleLens-container tab-pane fade in" id="sin-1">
                                                <a class="simpleLens-image" data-lens-image="public/image/one.png" href="#"><img src="public/image/one.png" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                  
                                            <div class="simpleLens-container tab-pane active fade in" id="sin-2">
                                                <a class="simpleLens-image" data-lens-image="public/image/one.png" href="#"><img src="public/image/one.png" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                   
                                            <div class="simpleLens-container tab-pane fade in" id="sin-3">
                                                <a class="simpleLens-image" data-lens-image="public/image/one.png" href="#"><img src="public/image/one.png" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                  
                                    </div>
                                </div>
                            </div>
                            <div class="quick-thumb">
                                <ul class="product-slider">
                            
                                        <li class="active"><a data-toggle="tab" href="#sin-1"> <img src="public/image/one.png" alt="quick view" /> </a></li>
                                 
                                        <li><a data-toggle="tab" href="#sin-2"> <img src="public/image/one.png" alt="small image" /> </a></li>
                                   
                                        <li><a data-toggle="tab" href="#sin-3"> <img src="public/image/one.png" alt="small image" /> </a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-8">
                        <div class="quick-right">
                            <div class="list-text">
                                <h3>Chỗ này hiển thị tên sản phẩm</h3>
                                <div class="ratting floatright">
                                    <p>( 27 Rating )</p>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-half"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                </div>
                                <h5> VNĐ</h5>
                             
                                    <p>CHỗ này để mô tả mặt hàng</p>
                            
                                <div class="list-btn">
                                    <a href="?action=giohang">Thêm vào giỏ</a>
                                 
                                    <a href="#info">Chi tiết</a>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-product item end -->
            <!-- reviews area start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="reviews padding60 margin-top">
                        <ul class="reviews-tab clearfix" id="info">
                         
                                <li class="active"><a data-toggle="tab" href="#moreinfo">Đặc điểm</a></li>
                           
                            <li><a data-toggle="tab" href="#reviews">Đánh giá</a></li>
                        </ul>
                        <div class="tab-content">
                         
                                <div class="info-reviews moreinfo tab-pane fade in active" id="moreinfo">
                                    <div class="tb">
                                        <h5>ĐẶC ĐIỂM</h5>
                                        <ul>
                                            <li>
                                                <span>Xuất xứ</span>
                                                <div></div>
                                            </li>
                                            <li>
                                                <span>kiểu giày</span>
                                                <div></div>
                                            </li>
                                            <li>
                                                <span>Màu sắc</span>
                                                <div></div>
                                            </li>
                                            <li>
                                                <span>Kích cỡ</span>
                                                <div></div>
                                            </li>
                                            <li>
                                                <span>Thương hiệu</span>
                                                <div></div>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                          
                            <div class="<?php if ($data['MaDM'] == 0) {
                                            echo 'info-reviews review-text tab-pane fade in';
                                        } else {
                                            echo 'info-reviews moreinfo tab-pane fade in active';
                                        } ?>" id="reviews">
                                <div class="about-author">
                                    <!-- comments -->
                                    <div class="post-comments">
                                        <!-- comment -->
                                        <div class="fb-comments" data-href="https://dxdbloger.000webhostapp.com?act=detail&id=<?= $data['MaSP'] ?>" data-numposts="5" data-width=""></div>
                                        <!-- /comment -->
                                    </div>
                                    <!-- /comments -->
                                </div>
                                <hr />
                                <div class="your-rating log-title">
                                    <h3>Góp ý :</h3>
                                </div>
                                <div class="custom-input">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-mail">
                                                    <span>Subject</span>
                                                    <input  type="text" name="subject">
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="custom-mess">
                                                <textarea  name="contents" placeholder="Contents"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="submit-text">
                                                <input   type="submit" name="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- reviews area end -->
        </div>
    </div>
    <!-- product-details section end -->
    <!-- related-products section start -->
 