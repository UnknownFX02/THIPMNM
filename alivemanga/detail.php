<!DOCTYPE html>
<html>
<head>

	<!-- css boottrap header-->
<?php require("pageload/header.php");
	  require("js/function.php");
 ?>

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
    	 	{ $GLOBALS['maloaitruyen'] = $row['ma_loaitr'];
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
						<div class="h1"><?php echo $row['manganame'] ?></div>
						<div>Tên khác: <?php echo $row['other_name']; ?></div>
						<div>Tác giả: <?php echo $row['actor']; ?></div>
						<div>Tình trạng: <?php echo $row['conditions']; ?></div>
						<div>Thể loại: <?php echo tenLoaiManga($row['ma_loaitr']);?></div>
						<div>Tóm Tắt: </div>
						<p class="text-justify"> <?php echo $row["description"]; ?></p>
					</div>
				</div>
				<?php 
			}
		} else {
			 echo "0 results";
			} ?>
	<div class="p-2 mb-2 bg-dark text-white h2"> Danh Sách Chương</div>
	<div class="box " style="border-style: outset;"> <ul style="max-height: 500px;overflow-y: auto;">
		<?php 
		$sql= "SELECT chapters.chapter_name,chapters.chapter_id, chapters.mangaid, chapters.updated_time, chapters.viewer FROM `chapters` INNER JOIN `manga` ON chapters.mangaid = manga.mangaid WHERE chapters.mangaid='$id' ORDER BY `chapters`.`chapter_name` DESC"; //order by la de sap xep theo thu tu chu tu be den lon(ASC) con DESC la nguoc lai
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
    	 	{
		?>
		<li>
			<a class="text-decoration-none" href="count.php?id=<?php echo $row['mangaid'];?>&chap=<?php echo $row['chapter_id'];?>" >Chap <?php echo $row['chapter_name']; ?> </a>
			<span style="float: right; width: 100px;text-align: right;font-style: italic;color:#3C9BFF;"><?php echo dinhDangNgay($row['updated_time']); ?> </span>
			<span style="float: right; width: 100px;text-align: right;font-style: italic;color:#3C9BFF;"><?php echo $row['viewer']; ?> Lượt xem </span>
		</li>
		<?php 
			}
		} else {
			 echo "CHƯA CÓ TẬP TRUYỆN NÀO";
			} ?>
	</ul></div>
	<div class="p-2 mb-2 bg-dark text-white h2"> Cùng Thể Loại </div>
	<?php 
		$sql = "select * from manga where ma_loaitr='$maloaitruyen' limit 6 ";
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
		      <a href="detail.php?id=<?php echo $row['mangaid']; ?>"><img src="images/cover/<?php echo $row["manga_cover"]?>" alt="<?php echo $row['manganame']; ?>" class="img-thumbnail">
		      <a class="text-decoration-none" href="detail.php?id=<?php echo $row["mangaid"]; ?>" style="text-align: center;"><b><center> <?php echo $row["manganame"] ?> </center></b> </a>
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