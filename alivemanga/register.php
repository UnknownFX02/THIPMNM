
<!DOCTYPE html>
  <head>
	<title>Đăng Ký</title>
<?php
	require("pageload/header.php");
	require("js/function.php"); ?>
</head>
<body>
			<!-- NAVBAR -->
<?php require("pageload/navbar.php");
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$mail = $_POST["email"];
		$password1 = md5($_POST["password1"]);
		$password2 = md5($_POST["password2"]);
		$name = $_POST["name"];
		$gt = $_POST["gt"];
		$ngaysinh = $_POST["ngaysinh"];
		$avatar_name=basename($_FILES["avatar"]["name"]);
		$avatar_size=$_FILES["avatar"]["size"];
		$avatar_temp=$_FILES["avatar"]["tmp_name"];
		$avatar_des="images/user/";
		//$avatar_type=$_FILES['avatar']['type'];
		//Lấy đuôi file
		$extension = substr($avatar_name, strpos($avatar_name,'.') +1);
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($mail == "" || $password1 == "" || $name == ""){?>
			<div class="alert alert-danger">
            <strong>Bạn vui lòng nhập đầy đủ thông tin</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
        </div>
		<?php }
			else{
				if(!ktMail($mail))
					echo "mail đã tồn tại";
			else
				if($password1 != $password2){?>
		<div class="alert alert-danger">
            <strong>Mật khẩu không trùng khớp</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
        </div>
			<?}
			else
				if($extension != "jpg" && $extension != "jpeg" && $extension != "png"){?>
			<div class="alert alert-danger">
           		<strong>sai định dạng file hình</strong>
            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
        	</div>
					<?php }
			else
        	    if($avatar_size>="1000000"){?>
        		<div class="alert alert-danger">
           			<strong>kích thước ảnh phải bé hơn 1mb</strong>
            		<button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
        		</div>
        	    <?php }
			else{
			//thực hiện việc lưu trữ dữ liệu vào db
				if(!move_uploaded_file($avatar_temp, $avatar_des.$avatar_name))
					{?>
		<div class="alert alert-danger">
            <strong>Lỗi!!!</strong> Không lưu được file hình
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
        </div>
    <?php }
			$sql = "INSERT INTO `user`(
							`user_ID`,
							`user_email`,
							`user_password`,
							`user_name`,
							`gioitinh`,
							`ngaysinh`,
							`avatar`,
							`group_id`
	    					) VALUES (
	    					NULL,
	    					'$mail',
	    					'$password1',
						    '$name',
						    '$gt',
	    					'$ngaysinh',
	    					'$avatar_name',
	    					'2'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				?>
		<div class="alert alert-success">
            <strong>Đăng Ký Thành Công</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
        </div>
				<?php
			}
		}
	}
	?>
						<!-- HEADER -->
<?php include("pageload/header.php"); ?>
						<!-- content -->
<div class="container">
    <form action="" method="POST" class="form-signin" style="text-align: center;" enctype="multipart/form-data">
      <a href="index.php"><img class="mb-4" src="alivemanga.ico" alt="" width="120" height="120"></a>
      <h1 class="h3 mb-3 font-weight-normal"><strong>Đăng Ký</strong></h1>
      <label for="email" class="sr-only">Email</label>
      
	  <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
      
	  <label for="password1" class="sr-only">Mật khẩu</label>
      
	  <input type="password" name="password1" id="password1" class="form-control" placeholder="Mật khẩu" required>

	  <label for="password2" class="sr-only">Nhập Lại Mật khẩu</label>
      
	  <input type="password" name="password2" id="password2" class="form-control" placeholder="Nhập Lại Mật khẩu" required>

 	  <label for="name" class="sr-only">Họ Tên</label>
      
	  <input type="text" name="name" id="name" class="form-control" placeholder="Họ Tên" required>

 	  <label for="gt" class="sr-only">Giới tính</label>
      
	  <input type="radio" id="gt" name="gt" value="Nam"  checked> Nam
	  <input type="radio" id="gt" name="gt" value="Nữ"> Nữ
	  <input type="radio" id="gt" name="gt" value="Khác"> Khác

	  <label for="ngaysinh" class="sr-only">Ngày sinh</label>

      <div style="text-align: left;"> Ngày sinh:</div>

	  <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" required>

	  <label for="avatar" class="sr-only">Hình Đại diện</label>

      <div style="text-align: left;"> Hình Đại Diện: </div>

	  <input type="file" name="avatar" id="avatar" class="form-control" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_submit">Đăng Ký</button>
	  
    </form>
</div>
			<!-- FOOTER -->
<?php include("pageload/footer.php"); ?>
			<!-- JavaScripts -->
<?php include("pageload/js.php"); ?>
  </body>
</html>
