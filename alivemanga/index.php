
<!DOCTYPE html>
<html>
<head>
	<title>TRANG CHỦ | ALIVE MANGA</title>
<?php require("pageload/header.php");
	require("js/function.php");			?>
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

						<!--NEW MANGA UPDATES -->
		<div class="p-2 mb-2 bg-dark text-white"><h2><b> MỚI CẬP NHẬT</b></h2> </div>
<?php 
    $sql="SELECT count(mangaid) AS total FROM manga ORDER BY `manga`.`updated` DESC";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total'];
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1; //lấy trang hiện tại
    $limit = 18; //số truyện hiển thị trong trang
    $total_page = ceil($total_records / $limit); 
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    $start = ($current_page - 1) * $limit;

	$sql="SELECT * FROM manga ORDER BY `manga`.`updated` DESC LIMIT $start, $limit";
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
		      <a href="count.php?id=<?php echo $row['mangaid']; ?>"><img src="images/cover/<?php echo $row["manga_cover"]?>" alt="<?php echo $row['manganame']; ?>" class="img-thumbnail">
		      <a class="text-decoration-none" href="count.php?id=<?php echo $row["mangaid"]; ?>" style="text-align: center;"><b><center> <?php echo $row["manganame"] ?> </center></b> </a>
		      <a class="text-decoration-none" href="count.php?id=<?php echo $row['mangaid'];?>&chap=<?php echo idChap(chapMoiNhat($row['mangaid']),$row['mangaid']);?>"><center> Chap <?php echo chapMoiNhat($row['mangaid']);?></center></a>
			</div>
		<?php 
			}
			?> </div><?php
		} else {
			 echo "0 results";
			}
			?>
			<!--- code phân trang -->

	<?php if($limit < $total_records){ ?>
  <ul class="pagination justify-content-center">
    <?php if ($current_page > 1 && $total_page > 1){ ?>
    <li class="page-item">
      <a class="page-link" href="index.php?page=<?php echo $current_page-1; ?>" tabindex="-1" aria-disabled="true">Previous</a>
    </li> <?php }
        for ($i = 1; $i <= $total_page; $i++){
    ?>
    <li class="page-item <?php if ($i == $current_page){ echo "active";}?>"><a class="page-link" href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a></li> <?php } 
    if ($current_page < $total_page && $total_page > 1){ ?>
    <li class="page-item">
      <a class="page-link" href="index.php?page=<?php echo $current_page+1; ?>">Next</a>
    </li> <?php } ?>
  </ul> <?php } ?>
						<!-- MANGA gì đó theo thể loại --->
						<div class="p-2 mb-2 bg-dark text-white"><h2><b> BẢNG CHỮ CÁI </b></h2> </div>
	<?php 
		$sql = "SELECT * FROM manga ORDER BY `manga`.`manganame` ASC LIMIT 12 ";
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
		      <a href="count.php?id=<?php echo $row['mangaid']; ?>"><img src="images/cover/<?php echo $row["manga_cover"]?>" alt="<?php echo $row['manganame']; ?>" class="img-thumbnail">
		      <a class="text-decoration-none" href="count.php?id=<?php echo $row["mangaid"]; ?>" style="text-align: center;"><b><center> <?php echo $row["manganame"] ?> </center></b> </a>
		      <a class="text-decoration-none" href="count.php?id=<?php echo $row['mangaid'];?>&chap=<?php echo idChap(chapMoiNhat($row['mangaid']),$row['mangaid']);?>"><center> Chap <?php echo chapMoiNhat($row['mangaid']);?></center></a>
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