<?php
include 'KetNoiCSDL.php';

class ChiTiet extends KetnoiCSDL {
	public $connect;

	public function __construct() {
		parent::__construct();

		$connect = $this->ketNoi();
		$this->ketNoi = $connect;

	}

	function chiTietSanPham() {
		$sql = "SELECT id, ten_san_pham, gia_ban, hinh_anh ,  ghi_chu  FROM san_pham ";

		$query = mysqli_query($this->ketNoi(), $sql);
		// var_dump($query);
		// die();
		$items = [];
		while ($row = mysqli_fetch_assoc($query)) {
			$items[] = $row;
		}
		return $items;
	}

	// function danhsachsanpham() {
	// 	$sql = "SELECT id, ten_san_pham, gia_ban, hinh_anh , ghi_chu  FROM san_pham ";

	// 	$query = mysqli_query($this->ketNoi(), $sql);
	// 	// var_dump($query);
	// 	// die();
	// 	$items = [];
	// 	while ($row = mysqli_fetch_assoc($query)) {
	// 		$items[] = $row;
	// 	}
	// 	return $items;
	// }

}
