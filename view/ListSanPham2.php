


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <style>

    button{

      border-radius: 7px;
      width: 60px;

      background-color: #3279EA;

    }

    a{
     border-style: ridge;
     border-radius: 5px;
     width: 100px;
    }

    .container{
    background-color: #EDEDEE
    }

    h2{
      text-align: center;
      padding-bottom: 20px;
      color: #E66B4D;
    }
     a{
      padding-top: 50px;
    }

    #aaa{
      width: 100px;
    }
    .seach{
     float: left;
    }

    .form{
      float: right;
    }






  </style>
</head>
<body>
  <div class="container">




	<h2>DANH SÁCH SẢN PHẨM</h2>



  <div class="seach">
       <a href="index.php?action=add" class="btn btn-success btn-md">+ Thêm sp</a>
  </div>


<br>


	<table class="table">
  <thead class="thead-dark">



    <tr>
      <th scope="col">ID</th>
      <th scope="col">Mã Sản Phẩm</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Nhóm Hàng</th>
      <th scope="col">Gía Nhập</th>
      <th scope="col">Giá Bán</th>
      <th scope="col">Ghi Chú</th>
      <th scope="col">Chỉnh Sửa </th>

    </tr>
  </thead>
 <tbody>
  <?php foreach ($hienthi as $key => $value): ?>
    <tr>
      <td><?=$value['id']?></td>
      <td><?=$value['ma_san_pham']?></td>
      <td><?=$value['ten_san_pham']?></td>
      <td><?=$value['thuoc_nhom']?></td>
      <td><?=$value['gia_nhap']?></td>
      <td><?=$value['gia_ban']?></td>
      <td><?=$value['ghi_chu']?></td>
      <td>
        <a onclick="return confirm('Bạn Có Muốn Sửa Không ?')"  class="btn btn-primary" href="index.php?action=sua&id=<?php echo $value['id'] ?>"> sửa</a>
        <a onclick="return confirm('Bạn Có Chắc Chắn Muốn Xoá Sản Phẩm này Không ?')"   class="btn btn-primary" href="index.php?action=delete&id=<?php echo $value['id'] ?>"> xoá</a>
     </td>
    </tr>
    <?php endforeach;?>

  </tbody>
</table>
</div>


</body>
</html>