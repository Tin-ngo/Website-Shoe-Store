<!-- trang checkout -->


<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thanh Toán</h2>
				</div>
			</div>
		</div>
	</div>
</div>



<section id="cart_items"  style="margin-top: -50px; margin-bottom: -50px;">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Giỏ Hàng Của Bạn</li>
				</ol>
			</div>
		</div>
	</section>



<section class="pages checkout section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="main-input single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Chi tiết hóa đơn</strong></h3>
					</div>
					<div class="custom-input">
						<form action="?act=checkout&xuli=save" method="post">
							<input type="text" name="NguoiNhan" placeholder="Người nhận" required value="Tên khách hàng đặt đây"/>
							<input type="email" name="Email" placeholder="Địa chỉ Email.." required  value="Địa chỉ gmail đạt đây"/>
							<input type="text" name="SDT" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10"  value="SDT đặt đây"/>
							<input type="text" name="DiaChi" placeholder="Đại chỉ giao hàng" required  value="Địa chỉ kh đặt đây"/>
							</br>
							<div class="submit-text">
								<!--  <button type="submit">Thanh toán</button>  -->
								<a href="?action=hoanthanhdonhang">Thanh toán</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Hóa đơn</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<table>
							<thead>
								<tr>
									<th>Sản phẩm</th>
									<td>Thành Tiền</td>
								</tr>
							</thead>
							<tbody>
								
								<tr>
									<th></th>
									<td> VNĐ</td>
								</tr>
						
						<tr>
							<th>Giảm Giá</th>
							<td>0%</td>
						</tr>
						<tr>
							<th>Vận Chuyển</th>
							<td>15,000 VNĐ</td>
						</tr>
						<tr>
							<th>Vat</th>
							<td>0</td>
						</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Tổng</th>
									<td> VNĐ</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>