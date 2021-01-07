<?php
include FILE_CHUA . '/model/NguoiDungModel.php';

// $dangnhap = new DangNhap();
$action = $action = isset($_GET['action']) ? $_GET['action'] : 'login';

if ($action == 'login') {

	if ($_SESSION['dangnhap']) {
		header('location:index.php?controller=admin');
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$tendangnhap = $_POST['tendangnhap'];
		$matkhau = $_POST['password'];

		if ($tendangnhap == "" || $matkhau == "") {
			$thongbao = "tên đăng nhâp và mật khẩu không được để trống!";

		} else {
			$objDangnhap = new DangNhap();
			$kiemtra = $objDangnhap->loginAdmin($tendangnhap, $matkhau);
			if ($kiemtra) {
				$_SESSION['dangnhap'] = $kiemtra;

				header('location:index.php?controller=admin');

			}
		}

	}

	include FILE_CHUA . '/view/loginAdmin/login.php';

}

?>