<?php

include 'KetNoiCSDL.php';

class ThongTinSanPham extends KetnoiCSDL {

	public $connect;

	public function __construct() {

		parent::__construct();

		$connect = $this->ketNoi();
		$this->ketNoi = $connect;

	}

/*________________________________*/

	public function ListSanPham() {

		$query = "SELECT * FROM san_pham";
		$resutls = mysqli_query($this->ketNoi(), $query);

		$items = [];
		while ($row = mysqli_fetch_assoc($resutls)) {
			$items[] = $row;
		}

		return $items;
	}

/*_____________Sửa sản phẩm___________________*/

	public function EditSanPham($id, $masanpham, $tensanpham, $thuocnhom, $gianhap, $giaban, $ghichu) {

		$sql = "UPDATE san_pham SET ma_san_pham = '$masanpham', ten_san_pham = '$tensanpham', thuoc_nhom = '$thuocnhom', gia_nhap ='$gianhap', gia_ban='$giaban', ghi_chu = '$ghichu' WHERE id ='$id'";

		$resutls = mysqli_query($this->ketNoi(), $sql);
		// var_dump($this->ketNoi());
		// die();

	}
/*_____________Lấy ID___________________*/

	public function Get_id($id) {

		$sql = "SELECT * FROM san_pham WHERE id = $id";

		$query = mysqli_query($this->ketNoi, $sql);

		$sanpham = mysqli_fetch_assoc($query);
		return $sanpham;
		// var_dump($sanpham);
		// die();

	}

/*____________Thêm Sản Phẩm____________________*/

	public function AddSanpham($masanpham, $tensanpham, $thuocnhom, $gianhap, $giaban, $ghichu, $hinhanh) {

		$sql = "INSERT INTO san_pham (ma_san_pham, ten_san_pham, thuoc_nhom, gia_nhap, gia_ban, ghi_chu, hinh_anh) VALUES ('$masanpham', '$tensanpham', '$thuocnhom', '$gianhap', '$giaban', '$ghichu','$hinhanh')";
		var_dump($sql);
		die();

		$query = mysqli_query($this->ketNoi, $sql);

	}

	public function deleteSanPham($id) {
		$sql = "DELETE FROM san_pham WHERE id = $id";
		$query = mysqli_query($this->ketNoi, $sql);

	}

	public function SeachSanPham($key) {

		$sql = "SELECT * FROM san_pham WHERE ten_san_pham LIKE '%$key%' ORDER BY id DESC";
		$query = mysqli_query($this->ketNoi, $sql);
		$items = [];
		while ($row = mysqli_fetch_assoc($query)) {
			$items[] = $row;
		}
		return $items;

	}

}
