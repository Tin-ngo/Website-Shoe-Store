
<div class="tab-products single-products section-padding extra-padding-top">
    <div class="container">


        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <div class="product-tab">
                        <ul>
                           <li class="active dangnhap"><a data-toggle="tab" href="#arrival">Quên mật khẩu</a></li>
                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<center>
  <span class="pull-right" style="font-size: 20px; color: blue;">
 <?php if(isset($mk['matkhau'])){      ?>
   <?php  echo 'Mật khẩu của bạn là: '.$mk['matkhau']; ?>
  <?php   }else{    echo "";    }   ?>
</span>
</center>


        <div class="text-center tab-content">
            <div class="tab-pane  fade in active" id="arrival">
                <div class="wrapper">
                    <ul class="load-list load-list-three">
                      
                        <li>
                            <div class="row text-center">


                        <div class="container"> 



                         <div class="roww"> 
                          <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4 onee"> 
                           <legend><a href="http://hocwebgiare.com/">
                           </a> Hãy nhập thông tin của bạn
                           </legend> 
                           <!--     <form action="http://hocwebgiare.com" method="post" class="form" role="form"> -->

                           <form action="?action=laymatkhau_submit" method="POST" class="form" role="form"> 

                              <!--  <input class="form-control" name="youremail" placeholder="Email" type="email">   -->
                             <input class="form-control" type="text" name="email_laymk" placeholder="Nhập Email của bạn">

                           <!--  <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button>  -->

                                  <button class="btn btn-lg btn-primary btn-block button2" type="submit" name="submit">Lấy mật khẩu</button>

                                  <button class="btn btn-lg btn-primary btn-block button2" type="reset">Làm mới</button>

                           </form> 


                           <div class="text-center">
                            <br>
                            <span> Bạn đã có tài khoản? </span>
                            <a class="dn" href="?action=dangnhap" title="" >Đăng nhập</a> </div>
                             <div class="text-center">
                            <br>

                          </div> 
                          </div> 
                         </div>
                        </div>


                                  
                       
                            </div>
                        </li>
                      
                       
                    </ul>
                </div>
            </div>
            <!-- popular product end -->




                                </div>
                            </div>
                        </div>

                        
