 <?php
include FILE_CHUA . '/model/SanPham.php';
include FILE_CHUA . '/model/muahangmodel.php';

$ThongTinSanPham = new ThongTinSanPham();
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($action == 'order') {
	// var_dump(223);
	// die();

	$id = $_GET['id'];
	$objchitiet = new ThongTinSanPham();
	$sanpham = $objchitiet->Get_id($id);

	include FILE_CHUA . '/view/home_layout/thongtinkhachmuahang.php';
}

if ($action == 'thanhtoan') {

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$idsanpham = $_POST['id'];

		$hovaten = $_POST['hovaten'];
		$sodienthoai = $_POST['sodienthoai'];
		$tinhthanh = $_POST['tinhthanh'];
		$quanhuyen = $_POST['quanhuyen'];
		$xaphuong = $_POST['xaphuong'];
		$thonkhupho = $_POST['thonkhupho'];

		$ghichu = $_POST['chuthich'];

		$objmuahang = new muaHang();

		$muasanpham = $objmuahang->thongtinkhachhang($idsanpham, $hovaten, $sodienthoai, $tinhthanh, $quanhuyen, $xaphuong, $thonkhupho, $ghichu);

		header('location: index.php?controller=sanpham&action=danhsachsanpham');
		exit;

	}

}
