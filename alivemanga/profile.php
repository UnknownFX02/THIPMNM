<!DOCTYPE html>
<html>
<head>
	<title> PROFILE </title>
<?php require("pageload/header.php"); ?>
</head>
<body>
			<!-- NAVBAR -->
<?php require("pageload/navbar.php"); 
require("js/function.php"); ?>

			<!-- CONTENT -->
<div class="container">
	<div class="h1 text-center"><strong>THÔNG TIN TÀI KHOẢN</strong></div>
<div class="row">
	<div class="col">
		<img src="images/user/<?php echo $_SESSION['avatar']?>" style="width: 300px; height: 300px;">
		<div class="custom-file">
			<input type="file" class="custom-file-input" id="avatar">
			<label class="custom-file-label" for="avatar" data-browse="Broswe">Đổi Ảnh Đại Diện</label>
		</div>
	</div>
  		<div class="col">
			<table class="table table-striped" style="width: 750px">
				<tbody>
				    <tr>
				      <th style="width: 200px">Tên Tài Khoản: </th>
				      <td><?php echo $_SESSION['email']; ?></td>
				    <tr>
				      <th>Họ Tên:</th>
				      <td><?php echo $_SESSION['name']; ?></td>
				    </tr>
				    <tr>
				      <th>Ngày Sinh: </th>
				      <td><?php echo $_SESSION['ngaysinh']; ?></td>
				    </tr>
				    <tr>
				      <th>Giới Tính: </th>
				      <td><?php echo $_SESSION['gt']; ?></td>
				    </tr>
				    <tr>
				      <th>Loại Tài Khoản: </th>
				      <td><?php echo loaiTaiKhoan($_SESSION['group_id']); ?></td>
				    </tr>
				    <tr>
				      <th>Truyện Theo Dõi: </th>
				      <td>Truyện gì đó blaaaaaa aaaaaaaaa aaaaaaa aaaaaa aaaa aaaaaaa aaaaaaaaa aaaa aaaa aaa aaaaaa aaaaa aaaaaa aaaaa aaaaaaaaa aaaaaaaaa aaablabla</td>
				    </tr>
   				</tbody>
			</table>
		</div>
	</div>
</div>

			<!-- FOOTER -->
<?php include("pageload/footer.php"); ?>
    		<!-- JavaScripts -->
<?php include("pageload/js.php"); ?>
</body>
</html>