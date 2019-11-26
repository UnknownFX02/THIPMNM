<!DOCTYPE html>
<html>
<head>
	<title>Tên Truyện</title>
	<!-- css boottrap header-->
<?php require("pageload/header.php"); ?>

</head>
<body>

			<!-- HEADER -->
	<?php require("pageload/navbar.php"); ?>
			<!-- CONTENT -->
<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
	    <li class="breadcrumb-item"><a href="detail.php">Tên truyện</a></li>
	    <li class="breadcrumb-item active" aria-current="page">số chap</li>
	  </ol>
	</nav>
	<div class="row text-center">
		<div class="col">
		<img src="manga/naruto/chap 1/0.jpg" alt="placeholder+image">
		<img src="manga/naruto/chap 1/1.jpg" alt="placeholder+image">
		<img src="manga/naruto/chap 1/2.jpg" alt="placeholder+image">
		<img src="manga/naruto/chap 1/3.jpg" alt="placeholder+image">
		<img src="manga/naruto/chap 1/4.jpg" alt="placeholder+image">
		<img src="manga/naruto/chap 1/5.jpg" alt="placeholder+image">
	</div>
	</div>

		<!--- bình luận -->
		<div class="p-2 mb-2 bg-dark text-white"> BÌNH LUẬN </div>
		<div class="container">
			<div class="media">
			  <img src="images/user/default.jpg" class="mr-3" alt="..." style="width: 75px; height: 75px">
			  <div class="media-body">
			    <h5 class="mt-0">Media heading</h5>
			    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

			    <div class="media mt-3">
			      <a class="mr-3" href="#">
			        <img src="images/user/default.jpg" class="mr-3" alt="..." style="width: 75px; height: 75px">
			      </a>
			      <div class="media-body">
			        <h5 class="mt-0">Media heading</h5>
			        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
			      </div>
			    </div>
			  </div>
			</div>
			<div class="media">
			  <img src="images/user/dr-strange.jpg" class="mr-3" alt="..." style="height: 75px; width: 75px;">
			  <div class="media-body">
			    <h5 class="mt-0">Media heading</h5>
			    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
			  </div>
			</div>
		</div>
</div>
			<!-- FOOTER -->
<?php include("pageload/footer.php"); ?>
			<!-- JavaScripts -->
<?php include("pageload/js.php"); ?>
</body>
</html>