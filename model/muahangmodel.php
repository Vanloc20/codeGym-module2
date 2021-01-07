<?php

include_once 'KetNoiCSDL.php';

class muaHang extends KetnoiCSDL {

	public $connect;

	public function __construct() {

		parent::__construct();

		$connect = $this->ketNoi();
		$this->ketNoi = $connect;
	}
	/* ---------------------------------*/

	public function thongtinkhachhang($idsanpham, $hovaten, $sodienthoai, $tinhthanh, $quanhuyen, $xaphuong, $thonkhupho, $ghichu) {

		$sql = "INSERT INTO mua_hang (id_san_pham, ho_ten, so_dien_thoai, tinh_thanh, quan_huyen, xa_phuong, thon_khupho, ghi_chu) VALUES ($idsanpham,'$hovaten', '$sodienthoai', '$tinhthanh', '$quanhuyen', '$xaphuong', '$thonkhupho','$ghichu')";

		$query = mysqli_query($this->ketNoi, $sql);

	}

}
