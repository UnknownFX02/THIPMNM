
<!DOCTYPE html>
<html>
<head>
<?php require("pageload/header.php");
require("js/function.php");
 ?>
<title>Tìm kiếm</title>
</head>
<body>
			<!-- NAVBAR -->
<?php require("pageload/navbar.php");  ?>
			<!-- CONTENT -->
<div class="container">
			<!-- KẾT QUẢ TÌM KIẾM THEO THỂ LOẠI -->
<?php
	if(!isset($_REQUEST['search'])){
	$ten=$_GET['id'];
	$sql="select * from manga where ma_loaitr='$ten'";
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
			<title>THỂ LOẠI: <?php echo tenLoaiManga($row['ma_loaitr']); ?></title>
		    <div class="col-2">
		      <a href="count.php?id=<?php echo $row["mangaid"]; ?>"><img src="images/cover/<?php echo $row["manga_cover"]?>" alt="<?php echo $row['manganame']; ?>" class="img-thumbnail">
		      <a class="text-decoration-none" href="count.php?id=<?php echo $row["mangaid"]; ?>" style="text-align: center;"><b><center> <?php echo $row["manganame"] ?> </center></b> </a>
		      <a class="text-decoration-none" href="chap.php" style="text-align: center;"><center> Chap <?php echo $row["newchap"] ?></center></a>
			</div>
		<?php 
			}
			?> </div><?php
		} else {
			 echo "<h1>"."KHÔNG CÓ KẾT QUẢ"."</h1>";
			}
	} else{

?>
	<div class="p-2 mb-2 bg-dark text-white"><h2><b> Kết Quả Tìm Kiếm Cho "<?php echo $_GET['search'];?>": </b></h2> </div>
<?php 
		$search = addslashes($_GET['search']); 
		if(empty($search)){
			echo "du lieu cchua duoc nhap";
		}else
		{
			$sql="SELECT * FROM `manga` WHERE manganame LIKE '%$search%'";
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
		      <a class="text-decoration-none" href="chap.php?id=<?php echo $row['mangaid'];?>&chap=<?php echo idChap(chapMoiNhat($row['mangaid']),$row['mangaid']);?>"><center> Chap <?php echo chapMoiNhat($row['mangaid']);?></center></a>
			</div>
		<?php 
			}
			?> </div><?php
		} else {
			 echo "0 results";
			}
		}
	}
			?>
				<!-- KẾT QUẢ TÌM KIẾM THEO SEARCH -->
</div>
			<!-- FOOTER -->
<?php include("pageload/footer.php"); ?>
    		<!-- JavaScripts -->
<?php include("pageload/js.php"); ?>
</body>
</html>