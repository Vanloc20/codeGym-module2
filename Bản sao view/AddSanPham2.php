<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<style>

		body{
			margin: 0 auto;
		}

		h3{
			text-align: center;
			margin-top: 20px;
			color: #662818;
		}
		.container{
			border-style: ridge;
			width: 100%;height: 100%;
			margin-top: 20px;
			background-color:#E3E5EB;
		}

		textarea{
			font-style:italic;
		}

	</style>


</head>
<body>

		<h3>Thêm Sản Phẩm Mới</h3>
	<div class="container">



			<form method="POST" action="index.php?action=add">

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Mã Sản Phẩm</label>
						<input type="text" class="form-control" name="masanpham" placeholder="Mã Sản Phẩm">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Tên Sản Phẩm</label>
						<input type="text" class="form-control" name="tensanpham" placeholder="Tên Sản Phẩm">
					</div>
				</div>


				<div class="form-group">
					<label for="inputAddress">Thuộc Nhóm</label>
					<input type="text" class="form-control" name="thuocnhom" placeholder="Thuộc Nhóm">
				</div>



				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCity">Gía Nhập</label>
						<input type="text" class="form-control" name="gianhap" placeholder="Giá Nhập">
					</div>

					<div class="form-group col-md-6">
						<label for="inputCity">Gía Bán</label>
						<input type="text" class="form-control" name="giaban" placeholder="Giá Bán">
					</div>

				</div>

				<div class="form-group">

					<label for="inputAddress">Ghi Chú</label><br>
					<textarea name="message" rows="7" cols="50" name="message" placeholder="Ghi Chú Thích"></textarea>
				</div>





				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck">
							Check me out
						</label>
					</div>
				</div>
				<input class="btn btn-primary" type="submit" name="submit" value="Thêm sản phẩm ">

			</form>


	</div>


</body>


</body>
</html>