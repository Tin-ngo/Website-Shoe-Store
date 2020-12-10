
	
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giỏ hàng của bạn</h2>
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
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản Phẩm</td>
							<td class="description">Thông Tin sản Phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php	if(isset($_SESSION['sanpham'])){
						$_SESSION['tongtien'] = 0;
					   foreach ($_SESSION['sanpham'] as $value) { ?>
						<tr>
							<td class="cart_product">
								<img height='100' src="admin/public_admin/image/sanpham/<?= $value['anh1'] ?>">
							</td>
							<td class="cart_description">
								<h4><a href=""><?= $value['tenSP'] ?></a></h4>
								<p> </p> 
							</td>
							<td class="cart_price">
								<p><?= $value['Dongia'] ?>.000 VND</p>
							</td>
							<td class="cart_quantity">

                                
                                <div class="cart_quantity_button">
									<a class="cart_quantity_up" href="?action=giohang&act=update_giohang&id=<?= $value['idSP'] ?>"> + </a>
                                      <input class="cart_quantity_input" size="2" type="text" name="soluong" value="<?php echo $value['soluong']; ?>">
                                     <a class="cart_quantity_down" href="?action=giohang&act=update_giohang_tru&id=<?= $value['idSP'] ?>"> - </a>
								</div>
<!--
								<select>
								<?php for($i = 1; $i <= 10; $i++) : ?>
                                    <option value="<?php echo $i; ?>">
                                         <?php echo $i.$value['soluong']; ?>
                                    </option>
                                <?php endfor; ?>
                                </select>
-->


		 					</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php $_SESSION['tongtien'] += $value['thanhtien']; echo $value['thanhtien'].'.000 VND'; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="?action=giohang&act=xoagiohang&id=<?= $value['idSP'] ?>"><i class="fa fa-times"></i></a>
							</td>
							
						</tr>
             <?php } }?>

                         <tr>
                         	<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td style="font-size: 20px; color:orange; font-weight: bold; padding: 10px;">
								Tổng Tiền: <?php 
								if(isset($_SESSION['tongtien'])){
								echo $_SESSION['tongtien'].'.000 VND';
							}else{
								echo "";
							}
								?>
							</td>
							<td>
							</td>
                         </tr>

						
					</tbody>
				</table>
                
				<a href="?action=giohang&act=xoagiohang_all" class="pull-right" style="padding: 30px; padding-bottom: 100px;">
				    Hủy giỏ hàng <i class="fa fa-times"></i>
				</a>
				<a href="?action=thanhtoan&a=<?php foreach ($_SESSION['sanpham'] as $value) { echo $value['Dongia'].'&b=';}?>" class="pull-right" style="padding: 30px; padding-bottom: 100px;">
				    Xác Nhận Giỏ Hàng <i class="fa fa-check"></i>
			    </a>


			</div>
		</div>
	</section> <!--/#cart_items-->


    


<!--

<section id="cart_items">

<div class="container">
    <div class="col-sm-6">
			
			<div class="table-responsive cart_info">
				<form action="" method="">
				<table class="table table-condensed tbl">




					<thead>
						<tr class="cart_menu">


							<td colspan="2">Chi Tiết Giỏ Hàng</td>

						</tr>
					</thead>




					<tbody>

						<tr>
							<td>
								&emsp;Tổng Giỏ Hàng
							</td>
							<td class="ctgh_right">
								Để giá ở đây
							</td>
						</tr>

						<tr>
							<td>
								&emsp;Giảm giá
							</td>
							<td class="ctgh_right">
								Để phần trăm giảm giá
							</td>
						</tr>

						<tr>
							<td>
								&emsp;Vận chuyển
							</td>
							<td class="ctgh_right">
								Để giá vận chuyển
							</td>
						</tr>

						<tr>
							<td>
								&emsp;Vat
							</td>
							<td class="ctgh_right">
								Để số tiền thuế
							</td>
						</tr>


						<tr class="tongtien">
							<td>
								&emsp;Tổng Tiền 
							</td>
							<td class="ctgh_right">
								Để tổng tiền
							</td>
						</tr>

						<tr>
							<td>
								<a href="?action=thanhtoan">
									//   <input class="btn" type="submit" name="" value="Đặt hàng"></a> 
									đặt hàng
							</td>

						</tr>
					</tbody>
				</table>
				</form>
			</div>
		</div>






		



		<div class="col-sm-1"></div>









		<div class="col-sm-5">








			<div class="table-responsive cart_info">
				<table class="table table-condensed tbl">




					<thead>
						<tr class="cart_menu">


							<td>Mã Giảm Giá</td>

						</tr>
					</thead>




					<tbody>

						<tr>
							<td>
								&emsp;Nhập Mã Giảm Giá (Nếu Có)!
							</td>
						</tr>
						<tr>
							<td>
								&emsp;<input type="text" name="" placeholder="Nhập Mã Giảm Giá Của Bạn Tại Đây!">
							</td>
						</tr>
						<tr>
							<td>
								&emsp;<input class="btn" type="submit" name="" value="Áp Dụng">
							</td>
						</tr>

						
					</tbody>


				</table>
			</div>









		</div>



		</div>

</section>


-->













    
