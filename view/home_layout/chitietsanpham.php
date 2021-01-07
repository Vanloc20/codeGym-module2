<?php include FILE_CHUA . '/home_layout/header.php';?>
<?php include FILE_CHUA . '/home_layout/menu.php';?>

<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">


			<div class="col-md-10">
				<div class="product-content-right">
					<div class="product-breadcroumb">
						<a href="">Điện Thoại</a>
						<a href="">Thời Trang/Mỹ Phẩm</a>
						<a href="">Thực Phẩm Chức Năng</a>
					</div>




					<div class="row">
						<div class="col-sm-6">
							<div class="product-images">
								<div class="product-main-img">
									<img src="<?=$hienthi['hinh_anh'];?>" alt="">
								</div>

								<div class="product-gallery">
									<img src="<?=$hienthi['hinh_anh'];?>" alt="">
									<img src="<?=$hienthi['hinh_anh'];?>" alt="">
									<img src="<?=$hienthi['hinh_anh'];?>" alt="">

								</div>
							</div>
						</div>




							<div class="col-sm-6">
								<div class="product-inner">
									<h2 class="product-name"> <?=$hienthi['ten_san_pham'];?> </h2>
									<div class="product-inner-price">
										<ins><h4>Giá Bán:</h4> <?=$hienthi['gia_ban'];?> Vnd</ins>
									</div>


									<form action="" class="cart">
										<div class="quantity">
											<input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
										</div>

										<div class="form-group">
											<a href="index.php?controller=muahang&action=order&id=<?php echo $hienthi['id']; ?>" class="btn btn-success btn-md">mua ngay</a>
										</div>
									</form>



									<div class="product-inner-category">
										<p>Thể Loại: <a href=""></a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
									</div>

									<div role="tabpanel">
										<ul class="product-tab" role="tablist">
											<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
											<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
										</ul>
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade in active" id="home">
												<h1 style="color: #E66B4D;">Giới Thiệu</h1>
												<h3>xuất xứ: <?=$hienthi['ghi_chu'];?></h3>

												<p>Thị trường ở Nhật Bản có lẽ là phong phú và cạnh tranh khốc liệt nhất. Ở đây có vô số thương hiệu từ bình dân đến sang trọng khiến bạn bị mê hoặc và lạc lối vì những thiết kế bao bì và chất lượng sản phẩm đậm chất “Nhật”.

												Các sản phẩm Nhật Bản không chỉ là cuộc chơi của những ông lớn mà là một bức tranh nhiều màu sắc với các thương hiệu con không kém phần nổi tiếng. Hiện nay có thể nói các mặt hàng Nhật rất đa dạng và hút khách nhất không chỉ thị trường nội địa Nhật mà còn lan rộng ra các nước trên thế giới trong đó có Việt Nam. </p>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="profile">
												<h2>Reviews</h2>
												<div class="submit-review">
													<p><label for="name">Name</label> <input name="name" type="text"></p>
													<p><label for="email">Email</label> <input name="email" type="email"></p>
													<div class="rating-chooser">
														<p>Your rating</p>

														<div class="rating-wrap-post">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
													<p><input type="submit" value="Submit"></p>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>




					</div>




							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php foreach ($danhSachSp as $key => $value): ?>



						<div class="related-products-wrapper">
							<h2 class="related-products-title">Related Products</h2>
							<div class="related-products-carousel">


								<div class="single-product">
									<div class="product-f-image">
										<img src="<?=$value['hinh_anh'];?>" alt="">
										<div class="product-hover">

											<a href="index.php?controller=sanpham&action=xemchitiet&id=<?php echo $value['id']; ?>" class="view-details-link"><i class="fa fa-link"></i> Chi Tiết SP</a>
										</div>
									</div>

									<h2><?=$value['ten_san_pham'];?> </h2>

									<div class="product-carousel-price">
										<ins>vnd <?=$value['gia_ban'];?> </ins> <del></del>
									</div>
								</div>
								    <?php endforeach;?>






	<?php include FILE_CHUA . '/home_layout/footer.php';?>
