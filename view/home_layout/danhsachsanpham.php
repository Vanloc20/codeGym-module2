	<?php include FILE_CHUA . '/home_layout/header.php';?>
<?php include FILE_CHUA . '/home_layout/menu.php';?>


<div class="single-product-area">
	<div class="zigzag-bottom">

	</div>
	<div class="container">
		<div class="row">

			<?php foreach ($hienthi as $key => $value): ?>

			<div class="col-md-3 col-sm-6">
				<div class="single-shop-product">
					<div class="product-upper">
						<img src="<?=$value['hinh_anh'];?>" alt="">
					</div>
					<h2><a href=""> <?=$value['ten_san_pham'];?> </a></h2>
					<div class="product-carousel-price">
						<ins>Giá: <?=$value['gia_ban'];?>đ</ins>
					</div>

					<div class="product-option-shop">

							<a href="index.php?controller=muahang&action=order&id=<?php echo $value['id']; ?>" class="btn btn-success">Mua Hàng</a>

							<a href="index.php?controller=sanpham&action=xemchitiet&id=<?php echo $value['id']; ?>"
								class="btn btn-primary" >Chi Tiết</a>



					</div>
				</div>
			</div>
			 <?php endforeach;?>


			<div class="row">
				<div class="col-md-12">
					<div class="product-pagination text-center">
						<nav>
							<ul class="pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">«</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">»</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php include FILE_CHUA . '/home_layout/footer.php';?>

