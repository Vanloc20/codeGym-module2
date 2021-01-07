<?php
session_start();
define('FILE_CHUA', dirname(__FILE__));

if (isset($_GET['action'])) {
	$actionName = $_GET['action'];

} else {
	$actionName = 'trangchu';
}

if (isset($_GET['controller'])) {
	$controllerName = $_GET['controller'];

} else {
	$controllerName = 'trangchu';

}

if ($controllerName == 'trangchu') {

	include FILE_CHUA . '/controller/controlerHome.php';
	$home = new ControllerHome();
	if ($actionName == 'trangchu') {
		$home->home();
	}
// if ($actionName == 'loginadmin') {
	// 	$home->loginAdmin();

// }

}

if ($controllerName == 'admin') {
	include FILE_CHUA . '/controller/XuLySanPhamController.php';
}
if ($controllerName == 'user') {
	include FILE_CHUA . '/controller/NguoiDungController.php';

}
if ($controllerName == 'sanpham') {
	include FILE_CHUA . '/controller/sanphamcontroller.php';
}

if ($controllerName == 'muahang') {
	// var_dump(123);
	// die();
	include FILE_CHUA . '/controller/muahangcontroller.php';

}
if ($controllerName == 'Gioithieu') {
	include FILE_CHUA . '/controller/controlerHome.php';

}