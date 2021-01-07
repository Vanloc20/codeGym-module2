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
                    <h3 style="text-align: center;"> Chỉnh Sửa Sản Phẩm</h3>
                </div>
                <div class="card-body">


                    <form method="POST" action="./index.php?controller=admin&action=sua">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?> ">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Mã Sản Phẩm</label>
                                <input type="text" name="masanpham" class="form-control"  value=" <?php echo $row['ma_san_pham']; ?>" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Tên Sản Phẩm</label>
                                <input type="text" name="tensanpham" class="form-control"  value=" <?php echo $row['ten_san_pham']; ?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Thuộc Nhóm</label>
                            <input type="text" name="thuocnhom" class="form-control"  value=" <?php echo $row['thuoc_nhom']; ?>" />
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Gía Nhập</label>
                                <input type="text" name="gianhap" class="form-control"  value=" <?php echo $row['gia_nhap']; ?>" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Gía Bán</label>
                                <input type="text" name="giaban" class="form-control"  value=" <?php echo $row['gia_ban']; ?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Ghi Chú</label><br>
                            <textarea name="message" class="form-control"  rows="7" cols="30"><?php echo $row['ghi_chu']; ?></textarea>
                        </div>

                        <input  class="btn btn-primary" type="submit" name="btn_submit" value="chỉnh sửa ">



            </div>
        </div>
    </div>
</main>
</div>

<?php include FILE_CHUA . '/.admin_layout/footer.php';?>