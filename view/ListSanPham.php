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
                      <h3>Quản Lý Sản Phẩm Điện Thoại</h3>
                    </div>





                    <div class="card-body">

                      <div class="form-group">
                      <a href="index.php?controller=admin&action=add" class="btn btn-success btn-md">+ Thêm sp</a>
                    </div>
                      <div class="form-group">
                        <form class="form-inline" action="index.php?controller=admin&action=search">

                          <input type="hidden" name="action" value="search">
                          <input type="hidden" name="controller" value="admin">

                          <div class="form-group">

                            <input type="text" class="form-control" name="tukhoa"  placeholder="nhập tên sản phẩm">
                          </div>

                          <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
                        </form>

                    </div>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Mã Sản Phẩm</th>
                                    <th scope="col">Tên Sản Phẩm</th>
                                    <th scope="col">Nhóm Hàng</th>
                                    <th scope="col">Gía Nhập</th>
                                    <th scope="col">Giá Bán</th>
                                    <th scope="col">Ghi Chú</th>
                                    <th scope="col">Hình Ảnh</th>

                                    <th scope="col">Chỉnh Sửa </th>

                                  </tr>
                                </thead>
                                <tfoot>
                                  <tr>
                                   <th scope="col">ID</th>
                                   <th scope="col">Mã Sản Phẩm</th>
                                   <th scope="col">Tên Sản Phẩm</th>
                                   <th scope="col">Nhóm Hàng</th>
                                   <th scope="col">Gía Nhập</th>
                                   <th scope="col">Giá Bán</th>
                                   <th scope="col">Ghi Chú</th>
                                   <th scope="col">Hình Ảnh</th>
                                   <th scope="col">Chỉnh Sửa </th>
                                 </tr>
                                </tfoot>
                                <tbody>

                                 <?php foreach ($hienthi as $key => $value): ?>
                                  <tr>
                                    <td><?=$value['id']?></td>
                                    <td><?=$value['ma_san_pham']?></td>
                                    <td><?=$value['ten_san_pham']?></td>
                                    <td><?=$value['thuoc_nhom']?></td>
                                    <td><?=$value['gia_nhap']?></td>
                                    <td><?=$value['gia_ban']?></td>
                                    <td><?=$value['ghi_chu']?></td>
                                    <td><?=$value['hinh_anh']?></td>

                                    <td>
                                      <a class="btn btn-primary" href="index.php?controller=admin&action=sua&id=<?php echo $value['id'] ?>"> sửa</a>

                                      <a onclick="return confirm('Bạn Có Chắc Chắn Muốn Xoá Sản Phẩm này Không ?')"   class="btn btn-primary" href="index.php?controller=admin&action=delete&id=<?php echo $value['id'] ?>"> xoá</a>
                                    </td>
                                  </tr>
                                <?php endforeach;?>

                              </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include FILE_CHUA . '/.admin_layout/footer.php';?>