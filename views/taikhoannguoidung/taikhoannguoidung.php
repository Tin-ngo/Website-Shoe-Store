<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thông tin tài khoản</h2>
				
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
				  <li class="active">Tài khoản người dùng</li>
				</ol>
			</div>
		</div>
	</section>




<!-- pages-title-end -->
<!-- My account content section start -->
<section class="pages my-account-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Tài khoản của tôi</strong></h3>
					</div>
					<div class="prament-area main-input" id="doitk">
						<ul class="panel-group" id="accordion">
							<li class="panel">
								<div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
									<label>
										<input type="radio" checked value="forever" name="rememberme" />
										Thông tin cá nhân
									</label>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="single-log-info">
										<div class="bulling-title">
											
											<div class="custom-input">
												<form action="?action=suataikhoan" method="POST">
													<input type="text" name="" placeholder="idUser:  <?php echo $data_taikhoan['idUser'] ?>" value="<?php echo $data_taikhoan['idUser'] ?>" disabled/>
													<input type="hidden" name="idUser" value="<?php echo $data_taikhoan['idUser'] ?>">
													<div class="row">
														<div class="col-md-6">
															<input type="text" name="ho" placeholder="Họ.." value="<?php echo $data_taikhoan['ho'] ?>" >
														</div>
														<div class="col-md-6">
															<input type="text" name="ten" placeholder="Tên.." value="<?php echo $data_taikhoan['ten'] ?>" >
														</div>
													</div>
													<input type="text" name="email" placeholder="Email.." value="<?php echo $data_taikhoan['email'] ?>">
													<input type="text" name="diachi" placeholder="Địa chỉ.." value="<?php echo $data_taikhoan['diachi'] ?>" >
													<div class="custom-select">

														<select class="form-control" name="gioitinh" title="Giới tính">
															<option  value="Nam" > Nam</option>
															<option value="Nữ"> Nữ</option>
															<option value="Khác"> Khác</option>
														</select>
													</div>
													<input type="text" name="sodienthoai" placeholder="Số điện thoại.." pattern="[0-9]+" minlength="10" value="<?php echo $data_taikhoan['sodienthoai'] ?>" />
													
													<input type="text" name="tendangnhap" placeholder="Tên đăng nhập.." value="<?php echo $data_taikhoan['tendangnhap'] ?>" />
													<input type="text" name="matkhau" placeholder="Mật khẩu.." pattern="[0-9]+" minlength="10" value="<?php echo $data_taikhoan['matkhau'] ?>" />
													<div class="submit-text">
													<button type="submit">Lưu</button>
													</div>
												</form>
											</div>
										</div>
									</div>
							</li>
				<!--			<li class="panel">
								<div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
									<label>
										<input type="radio" value="forever" name="rememberme" />
										Đổi mật khẩu
									</label>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="single-log-info">
										<div class="custom-input">
											<form action="?act=taikhoan&xuli=update" method="post">
												<input type="password" placeholder="Mật khẩu hiện tại .. " name="MatKhau" minlength="6" required />
												<input type="password" placeholder="Mật khẩu mới .. " name="MatKhauMoi" />
												<input type="password" placeholder="Xác nhận lại mật khẩu .." name="MatKhauXN" />
												<div class="submit-text text-left">
													<button type="submit_pw" value="submit form">Lưu</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</li>
						-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- my account content section end -->