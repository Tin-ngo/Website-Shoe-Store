
 <div class="header-middle"><!--header-middle-->
          
                <div class="row row_header">



                  <div class="col-sm-4">
                       

                         <div id="txt2"> 
                            &emsp; &emsp; &emsp; Luôn Mở cửa

                        </div>
                         <div>
                             	<i class="fa fa-phone"></i> +2 95 01 88 821
                             	&ensp;
                             	<i class="fa fa-envelope"></i> info@domain.com
                         </div>

                    </div>


                    <div class="col-sm-4">
                        
                        <div class="btn-group">
                           
                        <img src="public/image/logo.png" alt="logo">
                        

                        <div id="txt1">

                          &emsp;SHOE STORE 


                                <div id="txt1_1"> 
                             	&emsp;&emsp;&emsp;UY TÍN - CHẤT LƯỢNG - THỜI THƯỢNG
                                </div>
                         
                        </div>

                        </div>

                    </div>



                      <div class="col-sm-4">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav nav1">

                            <li><a id="a1" href="?action=giohang"> <i class="fa fa-shopping-cart" title="Giỏ Hàng Của Bạn"></i>&emsp;</a></li>

                            <li>
                               <div class="dropdown22">
                                <i class="fa fa-user img_user" title="Tài Khoản"></i>
                                  <div class="dropdown-content22"> 
                                    <!-- <a class="aacount" href="#"><center><span>Đăng nhập</span></center></a>-->
                                     <ul>
                                        <?php  if(isset($_SESSION['login'])){ ?>
                                        <li><b>Chào <?=$_SESSION['login']['Ho']?> <?=$_SESSION['login']['Ten']?></b></li>
                                        <li><a href="?act=taikhoan&xuli=account">Tài khoản</a></li>
                                        <li><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                                      <?php
                                        if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                                        <li><a href="admin/?mod=login">Trang quản lý</a></li>
                                     <?php }}else{ ?>
                                        <li><center><b class="hd_kh">Khách hàng<br><br></b></center></li>
                                        <li><a class="aacount" href="?action=dangnhap"><center><span>Đăng nhập</span></center></a></li>
                                      <?php } ?>
                                    </ul>
                                  </div>
                            </div>
                            </li>

                            </ul>
                        </div>
                    </div>



                </div>



        </div>




        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                       
                        <div class="mainmenuu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="?action=trangchu" class="active">Trang Chủ</a></li>
                                <li class="dropdown"><a href="?action=cuahang">Cửa Hàng</a></li> 
                                <li class="dropdown"><a href="?action=gioithieu">Giới Thiệu</a></li> 

                                <li><a href="#lienhe">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">

                            <input type="text" placeholder="Search"/>&ensp;
                            <a href="#"><i class="fa fa-search" id="i1"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- end header bottom -->
    	
 <!-- /header -->