<?php
include FILE_CHUA . '/model/SanPham.php';

$ThongTinSanPham = new ThongTinSanPham();
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($action == 'list') {
	$hienthi = $ThongTinSanPham->ListSanPham();
	// echo '<pre>';
	// print_r($hienthi);
	// echo '</pre>';
	include FILE_CHUA . '/view/ListSanPham.php';

}

/*-----------add san pham---------*/

if ($action == 'add') {

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$id = $_POST['id'];

		$masanpham = $_POST['masanpham'];
		$tensanpham = $_POST['tensanpham'];
		$thuocnhom = $_POST['thuocnhom'];
		$gianhap = $_POST['gianhap'];
		$giaban = $_POST['giaban'];

		$ghichu = $_POST['message'];

		$hinhanh = $_POST['hinhanh'];

		$add = new ThongTinSanPham();

		$themsanpham = $add->AddSanpham($masanpham, $tensanpham, $thuocnhom, $gianhap, $giaban, $ghichu, $hinhanh);
		var_dump($themsanpham);
		die();

		header('location:index.php?controller=admin');
		exit;

	}
	include FILE_CHUA . '/view/AddSanPham.php';

}

/*------sua san pham---------*/

if ($action == 'sua') {

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$id = $_POST['id'];

		$masanpham = $_POST['masanpham'];
		// var_dump($masanpham);
		// die();
		$tensanpham = $_POST['tensanpham'];
		$thuocnhom = $_POST['thuocnhom'];
		$gianhap = $_POST['gianhap'];
		$giaban = $_POST['giaban'];
		$ghichu = $_POST['message'];

		$sanpham = new ThongTinSanPham();
		$edit = $sanpham->EditSanPham($id, $masanpham, $tensanpham, $thuocnhom, $gianhap, $giaban, $ghichu);

		header('location:index.php?controller=admin');
		exit;

	} else {
		$id = $_GET['id'];
		$obj = new ThongTinSanPham();
		$row = $obj->Get_id($id);

		include FILE_CHUA . '/view/EditSanPham.php';

	}

}

if ($action == 'delete') {

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$id = $_GET['id'];

		$sanpham = new ThongTinSanPham();
		$delete = $sanpham->deleteSanPham($id);

	} else {
		$id = $_GET['id'];
		$xoa = new ThongTinSanPham();
		$xoasanpham = $xoa->deleteSanPham($id);
		header('location:index.php?controller=admin');
		exit;
	}

}

if ($action == 'search') {

	if ($_SERVER["REQUEST_METHOD"] == "GET") {

		if (isset($_GET['tukhoa'])) {
			$key = $_GET['tukhoa'];

			if ($key != "") {

				$sanpham = new ThongTinSanPham();
				$hienthi = $sanpham->SeachSanPham($key);

			}
		}

	}
	include FILE_CHUA . '/view/ListSanPham.php';

}
