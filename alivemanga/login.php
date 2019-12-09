<!DOCTYPE html>
<html>
  <head>
	<title>ĐĂNG NHẬP</title>
	<!-- css boottrap-->
<?php require("pageload/header.php"); ?>

  </head>

  <body>
<?php
	//kiểm tra đã đăng nhập chưa
	//if(isset($_SESSION))
	//	header('Location: index.php');
	//kiểm tra nút login đã được nhấn
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$email = $_POST["email"];
		$password = md5($_POST["password"]);
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$email = strip_tags($email);
		$email = addslashes($email);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($email == "" || $password =="") {
?>
			<script> alert("username hoặc password không để trống!");</script>
<?php
		}else{
			$sql = "select * from user where user_email = '$email' and user_password = '$password' ";
			$result = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($result);
			if ($num_rows==0) {
?>
			<script> alert("email hoặc password sai!");</script>
<?php
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				while($row = mysqli_fetch_assoc($result)) 
    	 	{
				$_SESSION['name'] = $row['user_name'];
				$_SESSION['email'] = $row['user_email'];
				$_SESSION['gt'] = $row['gioitinh'];
				$_SESSION['avatar'] = $row['avatar'];
				$_SESSION['group_id'] = $row['group_id'];
				$_SESSION['ngaysinh'] = $row['ngaysinh'];
			}

                // Thực thi hành động sau khi lưu thông tin vào session
                //chuyển hướng trang web tới một trang gọi là index.php
                if($email == "admin")
                	header('Location: admin/index.php');
                else
	               header('Location: index.php');
				}
			}
		}
?>
			<!-- HEADER -->
<?php require("pageload/navbar.php") ?>
<div class="container">
    <form action="" method="POST" class="form-signin" style="text-align: center;">
      <a href="index.php"><img class="mb-4" src="alivemanga.ico" alt="" width="120" height="120"></a>
      <h1 class="h3 mb-3 font-weight-normal"><strong>Đăng Nhập</strong></h1>
      <label for="email" class="sr-only">Email</label>
      
	  <input type="text" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
      
	  <label for="password" class="sr-only">Mật khẩu</label>
      
	  <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu" required>
	  <a class="text-decoration-none" href="#">Quên mật khẩu ? </a>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_submit">Đăng Nhập</button>
	  <p class="mt-5 mb-3 text-muted">&copy; AliveManga 2019-2020</p>
    </form>
</div>
			<!-- FOOTER -->
<?php include("pageload/footer.php"); ?>
			<!-- JAVASCRIPT -->
<?php include("pageload/js.php"); ?>
  </body>
</html>
