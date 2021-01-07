    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title"> Sản Phẩm </h2>
                        <div class="product-carousel">

                            <?php foreach ($danhSachSp as $key => $value): ?>

                                <div class="single-product">

                                    <div class="product-f-image">

                                        <img src="<?=$value['hinh_anh'];?>" alt="">

                                        <div class="product-hover">
                                            <!-- <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ</a> -->

                                            <a href="index.php?controller=sanpham&action=xemchitiet&id=<?php echo $value['id']; ?>" class="view-details-link"><i class="fa fa-link"></i> Chi Tiết SP</a>

                                        </div>
                                    </div>

                                    <h2><?=$value['ten_san_pham'];?> </h2>

                                    <div class="product-carousel-price">
                                        <ins>vnd <?=$value['gia_ban'];?> </ins> <del></del>
                                    </div>
                                </div>

                            <?php endforeach;?>




                            <!-- <div class="single-product">
                                <div class="product-f-image">
                                    <img src="https://nguyenvanloc94.000webhostapp.com/view/home_layout/img/product-5.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2>iPhone 6</h2>

                                <div class="product-carousel-price">
                                    <ins>$1200.00</ins> <del>$1355.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="https://nguyenvanloc94.000webhostapp.com/view/home_layout/img/product-6.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->