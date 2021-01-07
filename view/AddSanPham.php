    <?php include FILE_CHUA . '/admin_layout/header.php';?>



    <?php include FILE_CHUA . '/admin_layout/leftmenu.php';?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 style="text-align: center;">Thêm Sản Phẩm Mới</h3>
                    </div>
                    <div class="card-body">

            <form method="POST" action="index.php?controller=admin&action=add">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Mã Sản Phẩm</label>
                        <input type="text" class="form-control" name="masanpham" placeholder="Mã Sản Phẩm">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="tensanpham" placeholder="Tên Sản Phẩm">
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputAddress">Thuộc Nhóm</label>
                    <input type="text" class="form-control" name="thuocnhom" placeholder="Thuộc Nhóm">
                </div>



                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Gía Nhập</label>
                        <input type="text" class="form-control" name="gianhap" placeholder="Giá Nhập">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputCity">Gía Bán</label>
                        <input type="text" class="form-control" name="giaban" placeholder="Giá Bán">
                    </div>

                </div>

                <div class="form-group">

                    <label for="inputAddress">Ghi Chú</label><br>
                    <textarea name="message" class="form-control"  rows="4" cols="50" name="message" placeholder="Ghi Chú Thích"></textarea>
                </div>
                <div class="form-group">

                    <label for="inputAddress">Hình Ảnh</label><br>
                    <textarea name="hinhanh" class="form-control"  rows="3" cols="50" name="hinhanh" placeholder="link hình ảnh"></textarea>
                </div>





                <!-- <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div> -->
                <input class="btn btn-primary" type="submit" name="submit" value="Thêm sản phẩm ">

            </form>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include FILE_CHUA . '/.admin_layout/footer.php';?>