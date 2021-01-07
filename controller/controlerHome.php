

 <?php
include FILE_CHUA . '/model/chitietspmodel.php';

class ControllerHome {
	function home() {

		$text = 'abc';

		$objChitiet = new ChiTiet();
		$danhSachSp = $objChitiet->chiTietSanPham();
		// echo '<pre>';
		// print_r($danhSachSp);
		// echo '</pre>';

		include FILE_CHUA . '/view/home_layout/trangchu.php';
	}
	function gioithieu() {
		include FILE_CHUA . '/view/home_layout/gioithieu.php';
	}

}

?>