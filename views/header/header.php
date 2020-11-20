  
 <div class="header-middle"><!--header-middle-->
          
                <div class="row row_header">



                  <div class="col-sm-6">
                       <div class="dropdown" style="float:left;">
                         <button class="dropbtnn">Dịch Vụ Khách Hàng
                          <i class="fa fa-caret-down"></i>
                         </button>
                         <div class="dropdown-content" style="left:0;">
                         <a href="?action=gioithieu">Giới thiệu cửa hàng</a>
                         <a href="#lienhe">Thông tin liên hệ</a>
                         <a href="#">Gửi phản hồi</a>
                         </div>
                       </div>
                       <span class="kedoc">|</span>
                       Open 24/7 : Mail: abc@gmail.com &emsp; Phone: 0123456789
                     </div>



                      <div class="col-sm-6">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">

                         <!-- đăng ký -->
                              <li>
                               <div class="dropdown221">
                               
                                  <i class="fa fa-plus img_user" title="Tài Khoản">
                                    <a href="?action=dangnhap" class="dangkya">&emsp;Đăng ký &ensp; </a></i>
                               
                                  <div class="dropdown-content22"> 
                                    <!-- <a class="aacount" href="#"><center><span>Đăng nhập</span></center></a>-->
                                     <ul>
                                        <?php  if(isset($_SESSION['dangnhap'])){ ?>
                                        <li><b>Chào <?=$_SESSION['dangnhap']['Ho']?> <?=$_SESSION['dangnhap']['Ten']?></b></li>
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

                      <!-- đăng nhập -->
                            <li>
                               <div class="dropdown22">
                                <i class="fa fa-user img_user" title="Tài Khoản">&emsp;Đăng nhập</i>
                                  <div class="dropdown-content22"> 
                                    <!-- <a class="aacount" href="#"><center><span>Đăng nhập</span></center></a>-->
                                     <ul>
                                        <?php  if(isset($_SESSION['dangnhap'])){ ?>
                                        <li><b>Chào <?=$_SESSION['dangnhap']['Ho']?> <?=$_SESSION['dangnhap']['Ten']?></b></li>
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

                               
                                <li><a href="?action=trangchu" class="active">
                                  <div class="btn-group">
                                        <img src="public/image/logo.png" alt="logo" title="về trang chủ">
                                 </div>
                                </a></li>
                                <li class="dropdown"><a href="?action=cuahang">Cửa Hàng</a></li> 
                                 
                                 <!-- lấy action là id loại sản phẩm -->

                                <?php foreach ($data_loaisanpham as $value) {  ?>
                                <li class="dropdown"><a href="?action=<?= $value['idLoaiSP'] ?>&id=<?= $value['idLoaiSP'] ?>" style="font-size: 15px;"><?= $value['tenLSP'] ?></a></li>    
                              <?php }  ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            
                            <input type="text" placeholder="Search"/>&ensp;
                            <a href="#"><i class="fa fa-search" id="i1"></i></a>

                            <a id="a1" href="?action=giohang"> <i class="fa fa-shopping-cart" title="Giỏ Hàng Của Bạn"></i>&emsp;</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- end header bottom -->
    	
 <!-- /header -->