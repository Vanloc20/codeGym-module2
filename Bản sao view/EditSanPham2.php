<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<style>
			input{
				width: 250px;
				height: 25px;
				border-radius: 5px;
				margin-left: 10px;
			}
			textarea{
				width: 250px;
				height: 100px;
				border-radius: 5px;
				margin-left: 10px;
			}
		.submit{
				background-color: #3B91EB;
				width: 100px;height: 30px;


			}






	</style>



</head>
<body>


<form method="POST" action="./index.php?action=sua">
		<fieldset>
			<legend><h3>Chỉnh sửa thông tin sản phẩm </h3></legend>
			<table>
					<input type="hidden" name="id" value="<?php echo $row['id']; ?> ">

				<tr>

					<td>Mã Sản Phẩm  </td>
					<td><input type="text" name="masanpham" value=" <?php echo $row['ma_san_pham']; ?>" /></td>
				</tr>
				<tr>
					<td>Tên Sản Phẩm</td>
					<td><input type="text" name="tensanpham" value=" <?php echo $row['ten_san_pham']; ?>" /></td>
				</tr>
				<tr>
					<td>Thuộc nhóm </td>
					<td><input type="text" name="thuocnhom" value=" <?php echo $row['thuoc_nhom']; ?>" /></td>
				</tr>
				<tr>
					<td>Giá Nhập </td>
					<td><input type="text" name="gianhap" value=" <?php echo $row['gia_nhap']; ?>" /></td>
				</tr>
				<tr>
					<td>Giá Bán </td>
					<td><input type="text" name="giaban" value=" <?php echo $row['gia_ban']; ?>" /></td>
				</tr>
				<tr>
					<td>Ghi Chú </td>
					<td><textarea name="message" rows="10" cols="30"><?php echo $row['ghi_chu']; ?></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center"> <input class="submit" type="submit" name="btn_submit" value="chỉnh sửa "></td>
				</tr>
			</table>
		</fieldset>
	</form>

</form>

</body>
</html>