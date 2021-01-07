<?php include FILE_CHUA . '/home_layout/header.php';?>
<?php include FILE_CHUA . '/home_layout/menu.php';?>
<br>
<div class="container">

	<div id="customer_details" class="col1-set">
		<div class="col-1">
			<div class="woocommerce-shipping-fields">
				<h3 id="ship-to-different-address">
					<label class="checkbox" for="ship-to-different-address-checkbox">Điền Thông Tin Nhận Hàng</label>
					<input type="checkbox" value="1" name="ship_to_different_address" checked="checked" class="input-checkbox" id="ship-to-different-address-checkbox">
				</h3>



				<form method="POST" action="./index.php?controller=muahang&action=thanhtoan">
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?> ">
					<div class="shipping_address" style="display: block;">



						<p id="shipping_last_name_field" class="form-row form-row-last validate-required">
							<label class="" for="shipping_last_name">Họ Tên *
							</label>
							<input type="text" value="" placeholder="nhập Họ Tên" name="hovaten" class="input-text ">
						</p>


						<p id="shipping_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
							<label class="" for="shipping_city">Số Điện Thoại</label>
							<input type="text" value="" placeholder="nhập số điện thoại" name="sodienthoai" class="input-text ">
						</p>


						<p id="shipping_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
							<label class="" for="shipping_city">Tỉnh,Thành</label>
							<input type="text" value="" placeholder="nhập tỉnh, thành phố" name="tinhthanh" class="input-text ">
						</p>

						<p id="shipping_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
							<label class="" for="shipping_state">Quân, Huyện,Thị Xã</label>
							<input type="text" id="shipping_state" name="quanhuyen" placeholder="nhập quận / huyện" >
						</p>
						<p id="shipping_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
							<label class="" for="shipping_postcode">Xã, Phường,Thị Trấn *</abbr>
							</label>
							<input type="text" value="" placeholder="nhập xã /phường/ thị trấn" name="xaphuong" class="input-text ">
						</p>

						<p id="shipping_address_1_field" class="form-row form-row-wide address-field validate-required">
							<label class="" for="shipping_address_1">Thôn,Khu Phố<abbr title="required" class="required">*</abbr></label>
							<input type="text" value="" placeholder="nhập thôn/khu phố"name="thonkhupho" class="input-text ">


						</p>

						<p id="order_comments_field" class="form-row notes">
							<label class="" for="order_comments">Ghi chú</label>
							<textarea cols="5" rows="2" placeholder="Ghi Chú Thích (nếu Có)" class="input-text " name="chuthich"></textarea>
						</p>


						<input  class="btn btn-primary" type="submit" name="xacnhan" value="Xác Nhận ">




					</div>
				</form>








				</div>

			</div>

		</div>
	</div>

	<?php include FILE_CHUA . '/home_layout/footer.php';?>
