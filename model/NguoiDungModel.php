<?php
include 'KetNoiCSDL.php';

class DangNhap extends KetnoiCSDL {
	public $connect;

	public function __construct() {
		parent::__construct();

		$connect = $this->ketNoi();
		$this->ketNoi = $connect;

	}

	public function loginAdmin($username, $password) {

		$sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password' ";

		$query = mysqli_query($this->ketNoi, $sql);

		$hienthi = mysqli_fetch_assoc($query);
		return $hienthi;

		// var_dump($sql);
		// die();

	}

}

?>