<?php

include FILE_CHUA . '/model/SanPham.php';

$ThongTinSanPham = new ThongTinSanPham();
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($action == 'xemchitiet') {
	$id = $_GET['id'];

	// var_dump($id);
	// die();

	$objchitiet = new ThongTinSanPham();

	$hienthi = $objchitiet->Get_id($id);

	include FILE_CHUA . '/view/home_layout/chitietsanpham.php';

}

if ($action == 'danhsachsanpham') {

	$objChitiet = new ThongTinSanPham();

	$hienthi = $objChitiet->ListSanPham();
	// echo '<pre>';
	// print_r($hienthi);
	// echo '</pre>';
	// die();
	include FILE_CHUA . '/view/home_layout/danhsachsanpham.php';

}
