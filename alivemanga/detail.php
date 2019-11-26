<!DOCTYPE html>
<html>
<head>

	<!-- css boottrap header-->
<?php require("pageload/header.php"); ?>

</head>
<body>
			<!-- HEADER -->
<?php require("pageload/navbar.php"); ?>
<?php
		$id=$_GET['id'];
		//$test="Black Clover";
		$sql = "select * from manga where mangaid='$id'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
    	 	{
	?>
			<!-- Tên Truyện -->
	<title> <?php echo $row['manganame']; ?> </title>
			<!-- Địa chỉ Trang Web -->
<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><?php echo $row["manganame"]; ?> </li>
	  </ol>
	</nav>
			<!-- Thông Tin Truyện -->
				<div class="row">
					<div class="col">
						 <img src="images/cover/<?php echo $row["manga_cover"]?>" alt="" class="img-thumbnail">
					</div>
					<div class="col-9">
						<div><?php echo $row["manganame"] ?></div>
						<div>Tên khác: <?php echo $row["other_name"]; ?></div>
						<div>Tác giả: <?php echo $row["actor"]; ?></div>
						<div>Tình trạng: <?php echo $row["conditions"]; ?></div>
						<div>Thể loại:</div>
						<div>Tóm Tắt: </div>
						<p class="text-justify"> <?php echo $row["description"]; ?></p>
					</div>
				</div>
				<?php 
			}
		} else {
			 echo "0 results";
			} ?>
	<div class="p-2 mb-2 bg-dark text-white"> Danh sách chương</div>
	<div class="box " style="border-style: outset;">
		<?php 
		$sql= "SELECT chapters.chapter_name,chapters.chapter_id FROM `chapters` INNER JOIN `manga` ON chapters.mangaid = manga.mangaid WHERE chapters.mangaid='$id' ORDER BY `chapters`.`chapter_name` DESC"; //order by la de sap xep theo thu tu chu tu be den lon(ASC) con DESC la nguoc lai
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
    	 	{
		?>
		<div class="col"><a class="text-decoration-none" href="chap.php?id=<?php echo $row['chapter_id'];?>">&nbsp&nbspChap <?php echo $row['chapter_name']; ?> </a></div>
		<?php 
			}
		} else {
			 echo "CHƯA CÓ TẬP TRUYỆN NÀO";
			} ?>
	</div>
	<div class="p-2 mb-2 bg-dark text-white"> Cùng thể loại </div>
		<?php 
		$i=0;
		$sql = "select * from manga";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			?>
		<div class="row">
			<?php
    		// xuất dữ liệu mỗi cột
    		while($row = mysqli_fetch_assoc($result))
    	 	{
    	 		if($i<6){ //cái này mốt sửa thành điều kiện là truyện cùng thể loại xuất ra tối đa 6 truyện
		 ?>
		
		    <div class="col-2">
		      <img src="images/cover/<?php echo $row["manga_cover"]?>" alt="" class="img-thumbnail">
		      <a class="text-decoration-none" href="detail.php" style="text-align: center;"><b><center> <?php echo $row["manganame"] ?> </center></b> </a>
		      <a class="text-decoration-none" href="chap.php" style="text-align: center;"><center> Chap <?php echo $row["newchap"] ?></center></a>
			</div>
		<?php }$i++;
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