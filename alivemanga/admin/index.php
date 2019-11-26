<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    require_once("../db/connection.php"); //kết nối với db 
    require_once("../js/function.php");  //kết nối tới mớ function ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>DASHBOARD</title>
	<!-- css boottrap-->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php

//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['email'])) {
	 header('Location: ../login.php');
}
else{
?>
			<!-- HEADER -->
	<h1 style="text-align: center;"> DASHBOARD </h1>
			<!-- CONTENT -->
	<?php 
	?>
	<div class="row">
		<div class="col-2">
			<!--- navs tab ----------------- data-toggle="pill" -->
			<div class="nav flex-column nav-pills" id="dashboard-tab" role="tablist" aria-orientation="vertical">
    			<a class="nav-link active" id="admin-info-tab" data-toggle="pill" href="#admin-info" role="tab" aria-controls="admin-info" aria-selected="true">Thông Tin Cá Nhân</a>
      			<a class="nav-link" id="manga-list-tab" href="#manga-list" data-toggle="pill" role="tab" aria-controls="manga-list" aria-selected="false">Danh Sách Truyện</a>
      			<a class="nav-link" id="user-mangaer-tab" href="#user-manager" data-toggle="pill" role="tab" aria-controls="user-manager" aria-selected="false">Quản Lý User</a>
      			<a class="nav-link" id="settings-tab" href="#settings" data-toggle="pill" role="tab" aria-controls="settings" aria-selected="false">Cài Đặt</a>
    		</div>
		</div>
		<div class="col">
			<!-- tab content -->
			<div class="tab-content">
  				<div class="tab-content" id="dashboard-tabContent">
				    <div class="tab-pane fade show active" id="admin-info" role="tabpanel" aria-labelledby="admin-info-tab">
				    	<div class="row">
	<?php
		$admin="admin";
		$sql = "select * from user where user_email = '$admin'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
    		// xuất dữ liệu mỗi cột
    		while($row = mysqli_fetch_assoc($result)) 
    	 	{
	?>
						<div class="col-5"> <img src="../images/user/<?php echo $row["avatar"]?>" > </div>
							<div class="col-4"><div>tên tài khoản:
								<?php
									echo $row['user_email'];
								?>
							</div>
							<div> ngày sinh: 
								<?php
									echo $row['ngaysinh'];
								?>
							</div>
							<div>họ tên: 
								<?php
									echo $row['user_name'];
								?>
							</div>
							</div>
							<?php 
			}
		} else {
			 echo "0 results";
			}
			?>
						</div>
					</div>
					<!-- TAB QUẢN LÝ DANH SÁCH TRUYỆN -->
				    <div class="tab-pane fade" id="manga-list" role="tabpanel" aria-labelledby="manga-list-tab">
				    	<a href="addmanga.php"><button>Thêm Truyện</button></a>
				    	<table class="table">
				    		<thead class="thead-light">
						    <tr>
						        <th>STT</th>
						        <th>Tên truyện</th>
						        <th>Tên khác</th>
						        <th>Tác giả</th>
						        <th>Thể Loại</th>
						        <th>Nhóm dịch</th>
						        <th>Tình Trạng</th>
						        <th>Số chap</th>
						        <th>Lượt view</th>
						        <th>Ngày cập nhật</th>
						        <th>Sửa/Xóa</th>
						    </tr>
						</thead>
<?php
		$sql = "select * from manga ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
    		// xuất dữ liệu mỗi cột
    		while($row = mysqli_fetch_assoc($result)) 
    	 	{
	?>
						    <tr>
								<td><?php
									echo $row['mangaid'];
								?></td>
								<td><?php
									echo $row['manganame'];
								?></td>
								<td><?php
									echo $row['other_name'];
								?></td>
								<td><?php
									echo $row['actor'];
								?></td>
								<td><?php
									{
										$loai=tenLoaiManga($row['ma_loaitr']);
									echo $loai;
									}
								?></td>
								<td><?php
									echo $row['trans'];
								?></td>
								<td><?php
									echo $row['conditions'];
								?></td>
								<td><?php
									echo $row['newchap'];
								?></td>
								<td><?php
									echo $row['viewer'];
								?></td>
								<td><?php
									echo $row['updated'];
								?></td>
								<td><button>Sửa</button>/<button>Xóa</button>
								</td>
						    </tr>
						    <?php 
			}
		} else {
			 echo "0 có dữ liệu";
			}
			?>
</table>
					</div>
					<!-- TAB QUẢN LÝ USER -->
				    <div class="tab-pane fade" id="user-manager" role="tabpanel" aria-labelledby="user-mangaer-tab">
				    	<table class="table">
				    		<thead class="thead-light">
						    <tr>
						        <th>STT</th>
						        <th>Email</th>
						        <th>Mật Khẩu</th>
						        <th>Họ Tên</th>
						        <th>Giới Tính</th>
						        <th>Ngày Sinh</th>
						        <th>Avatar</th>
						        <th>Sửa/Xóa</th>
						    </tr>
						</thead>
						    <?php
		$sql = "select * from user ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
    		// xuất dữ liệu mỗi cột
    		while($row = mysqli_fetch_assoc($result)) 
    	 	{
    	 		if($row['user_ID']!="0"){
	?>
						    <tr>
								<td><?php
									echo $row['user_ID'];
								?></td>
								<td><?php
									echo $row['user_email'];
								?></td>
								<td><?php
									echo $row['user_password'];
								?></td>
								<td><?php
									echo $row['user_name'];
								?></td>
								<td><?php
									echo $row['gioitinh'];
								?></td>
								<td><?php
									echo $row['ngaysinh'];
								?></td>
								<td><img src="../images/user/<?php echo $row["avatar"]?>" style="width: 50px; height: 50px;">
								</td>
								<td><button>Sửa</button>/<a href="delete.php?id=<?php echo $row["user_ID"] ?>" class="delete"><button>Xóa</button></a>
								</td>
						    </tr>
						    <?php 
			}	}
		} else {
			 echo "0 có dữ liệu";
			}
			?>
</table>
					</div>
					<!--  -->
				    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
				   		<a href="../index.php"> trang chủ </a>
					</div>
				</div>
			</div>
		</div>

<?php } ?>
    		<!-- FOOTER -->
			<!-- JavaScripts -->
		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/bootstrap.js"></script>
		<script src="../js/bootstrap.bundle.min.js"></script>
		<script src="../js/bootstrap.bundle.js"></script>
?>

</body>
</html>