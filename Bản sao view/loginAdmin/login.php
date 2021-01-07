<!DOCTYPE HTML>
<html>
<head>
<title>Purple_loginform Website Template | Home ::</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href="https://nguyenvanloc94.000webhostapp.com/view/loginAdmin/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>
<body>
<!-- contact-form -->
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>Đăng Nhập Admin</h1>

		 <div class="alert-close">


		 </div>
	</div>
		<form method="POST" action="index.php?controller=user&action=login">


		 <?php echo $thongbao; ?>
			<li>
				<input type="text" class="text" placeholder="Tên đăng nhập" name="tendangnhap"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" placeholder="Password" name="password"> <a href="#" class="icon lock"></a>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" name="submit" value="Sign in" >
				<h4><a href="#">Quên Mật Khẩu?</a></h4>
						  <div class="clear">  </div>
			</div>

		</form>
		</div>
	</div>

	<div class="clear"> </div>
 footer

</body>
</html>



