<!-- HEADER -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- Thanh toolbar trên đầu trang -->
		<a class="navbar-brand" href="index.php"> <!-- tên trang web nhấn vào ra trang chủ -->
			 <img src="alivemanga.ico" width="30" height="30" class="d-inline-block align-top"alt=""> <b>ALIVEMANGA</b>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  <!-- Gộp menu lại khi đổi trình duyệt -->
		<span class="navbar-toggler-icon"></span> <!-- icon 3 gạch menu khi thay đổi trình duyệt -->
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- navbarSupportedContent -->
		   	<ul class="navbar-nav mr-auto">
		      	<li class="nav-item active">
		        	<a class="nav-link" href="index.php">Trang chủ</a>
		      	</li>
		      	<!--<li class="nav-item"> cai nay nam ngay truoc trang chu ko biet de lam gi <span class="sr-only">(current)</span>
		        	<a class="nav-link" href="#">Đây là tag đường link</a>
		      	</li> -->
		      	<li class="nav-item dropdown" >
		        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          	Thể loại
		        	</a>
		        	<div class="dropdown-menu" aria-labelledby="navbarDropdown"> <!-- mốt liệt kê bằng php -->
		          		<a class="dropdown-item" href="#">Manga</a>
		          		<a class="dropdown-item" href="#">Comic</a>
		          		<div class="dropdown-divider"></div>
	<?php
			$sql = "select * from groupmanga";
		    $result = mysqli_query($conn, $sql);
		    if (mysqli_num_rows($result) > 0)
		    {
		        // xuất dữ liệu mỗi cột
		        while($row = mysqli_fetch_assoc($result)) 
		        { ?>
		         	<a class="dropdown-item" href="search.php?id=<?php echo $row['ma_loaitr']; ?>"><?php echo $row['loaitr']; ?></a>
		        <?php }
		    } else {
		            echo "0 results";
		          }
		          ?>
		          		<div class="dropdown-divider"></div>
		          		<a class="dropdown-item" href="#">Khác</a>
		        	</div>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Giới Thiệu</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Liên Hệ</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Tin Tức</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="404.php">Lỗi</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="admin/index.php">DASHBOARD</a>
		      	</li>
		      	<!--- <li class="nav-item">  tag vô hiệu hóa
		        	<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      	</li> -->
		    </ul>
			<!-- <ul class="nav navbar-nav navbar-right">
		    </ul> -->
		    <ul class="navbar-nav ml-auto">
		    	<!-- search form -->
		    <form class="form-inline my-2 my-lg-0" method="GET" action="search.php">
		      	<input class="form-control mr-sm-2" type="search" placeholder="Tìm Kiếm" aria-label="Search" id="search" name="search">
		      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn_search">Tìm Kiếm</button>
		    </form>
<?php 
	if (!isset($_SESSION['email'])) { ?>
            <li class="nav-item">
		        <a class="nav-link" href="register.php">Đăng Ký</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="login.php">Đăng Nhập</a>
		    </li>
	<?php } else { ?>
			<li class="nav-item">
		        <a class="nav-link" href="#"> Chào <?php echo $_SESSION['name']; ?>, </a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="logout.php">Đăng Xuất</a>
		    </li>
		<?php } ?>
        </ul>
		</div>
	</nav>