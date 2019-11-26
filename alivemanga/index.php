
<!DOCTYPE html>
<html>
<head>
	<title>TRANG CHỦ | ALIVE MANGA</title>
<?php require("pageload/header.php"); ?>
</head>
<body>

			<!-- NAVBAR -->
<?php require("pageload/navbar.php");  ?>

			<!-- CONTENT -->
<div class="container">
	<div class="row">
		<div class="col">
			<a href="#"><img src="images/kimetsunoyaiba.jpg" alt="..." class="img-thumbnail"></a>
			<a href="#"><img src="images/bokunohero.jpeg" alt="..." class="img-thumbnail"></a>
		</div>
		<div class="col-6">
		    <div id="carouselExampleInterval" class="carousel slide carousel-size" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-interval="10000">
				      <img src="images/Nanatsu-no-Taizai.jpg" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item" data-interval="2000">
				      <img src="images/pokemon.jpg" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item" data-interval="2000">
				      <img src="images/dr-stone.jpg" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item" data-interval="2000">
				      <img src="images/pokemon.jpg" class="d-block w-100" alt="...">
				    </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
				</div>
		    </div>
		    <div class="col">
		    	<a href="#"><img src="images/Nanatsu-no-Taizai.jpg" alt="..." class="img-thumbnail"></a>
			<a href="#"><img src="images/dr-stone.jpg" alt="..." class="img-thumbnail"></a>
		    </div>
		</div>

						<!--NEW MANGA UPDATES images/nanatsunotaizai.jpg -->
		<div class="p-2 mb-2 bg-dark text-white"><h2><b> MỚI CẬP NHẬT</b></h2> </div>
<?php 
		$sql = "select * from manga ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			?>
		<div class="row">
			<?php
    		// xuất dữ liệu mỗi cột
    		while($row = mysqli_fetch_assoc($result))
    	 	{
		 ?>
		
		    <div class="col-2">
		      <a href="detail.php?id=<?php echo $row["mangaid"]; ?>"><img src="images/cover/<?php echo $row["manga_cover"]?>" alt="<?php echo $row['manganame']; ?>" class="img-thumbnail">
		      <a class="text-decoration-none" href="detail.php?id=<?php echo $row["mangaid"]; ?>" style="text-align: center;"><b><center> <?php echo $row["manganame"] ?> </center></b> </a>
		      <a class="text-decoration-none" href="chap.php" style="text-align: center;"><center> Chap <?php echo $row["newchap"] ?></center></a>
			</div>
		<?php 
			}
			?> </div><?php
		} else {
			 echo "0 results";
			}
			?>
			<!--- code phân trang -->
	<!-- <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav> -->
						<!-- MANGA gì đó theo thể loại --->
						<div class="p-2 mb-2 bg-dark text-white"><h2><b> HOT </b></h2> </div>
<?php 
		$sql = "select * from manga ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			?>
		<div class="row">
			<?php
    		// xuất dữ liệu mỗi cột
    		while($row = mysqli_fetch_assoc($result))
    	 	{
		 ?>
		
		    <div class="col-2">
		      <img src="images/cover/<?php echo $row["manga_cover"]?>" alt="" class="img-thumbnail">
		      <a class="text-decoration-none" href="detail.php?id=<?php echo $row["mangaid"];?>" style="text-align: center;"><b><center> <?php echo $row["manganame"] ?> </center></b> </a>
		      <a class="text-decoration-none" href="chap.php" style="text-align: center;"><center> Chap <?php echo $row["newchap"] ?></center></a>
			</div>
		<?php 
			}
			?> </div><?php
		} else {
			 echo "0 results";
			}
			?>
</div>
			<!-- FOOTER -->
<?php include("pageload/footer.php"); ?>
    		<!-- JavaScripts -->
<?php include("pageload/js.php"); ?>
</body>
</html>