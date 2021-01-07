<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
	<div class="container">

		<h3>Bạn có muốn xoá sản Không </h3>

		<div class="row">



				<a href="#" class="btn btn-danger">Xoá </a>
				<a href="#" class="btn btn-primary">Trở lại </a>



 <form  method="POST" action="./index.php?action=delete">

 <h1>Bạn có chắn muốn xóa sản phẩm này </h1>
  <h3 class='ten'><?php echo $delete['id']; ?></h3>


    <input type="hidden" name="id" value="<?php echo $delete['id']; ?>"/>


    <div class="form-group">
    	<tr>
      		<td><input type="submit" value="Delete" class="btn btn-danger"/></td>
     		<td><a class="btn btn-primary" href="index.php">Cancel</a></td>

        </tr>
    </div>
  </form>

	</div>

</body>
</html>