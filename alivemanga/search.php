
<!DOCTYPE html>
<html>
<head>
<?php require("pageload/header.php");

//function ở đây để tạm
	function tenLoaiManga($ma)
		{
			require("db/connection.php");
			$sql= "SELECT groupmanga.loaitr FROM `manga` INNER JOIN `groupmanga` ON manga.ma_loaitr = groupmanga.ma_loaitr WHERE manga.ma_loaitr='$ma' ";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0)
				{
    				$row = mysqli_fetch_assoc($result);
    				return $row['loaitr'];
				} else return 0;
		}
 ?>

</head>
<body>

			<!-- NAVBAR -->
<?php require("pageload/navbar.php");  ?>

			<!-- CONTENT -->
<div class="container">
			<!-- KẾT QUẢ TÌM KIẾM THEO THỂ LOẠI -->
	
<?php
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
		      <a href="detail.php?id=<?php echo $row["mangaid"]; ?>"><img src="images/cover/<?php echo $row["manga_cover"]?>" alt="<?php echo $row['manganame']; ?>" class="img-thumbnail">
		      <a class="text-decoration-none" href="detail.php?id=<?php echo $row["mangaid"]; ?>" style="text-align: center;"><b><center> <?php echo $row["manganame"] ?> </center></b> </a>
		      <a class="text-decoration-none" href="chap.php" style="text-align: center;"><center> Chap <?php echo $row["newchap"] ?></center></a>
			</div>
		<?php 
			}
			?> </div><?php
		} else {
			 echo "KHÔNG CÓ KẾT QUẢ";
			}

?>

				<!-- KẾT QUẢ TÌM KIẾM THEO SEARCH -->
	<div class="p-2 mb-2 bg-dark text-white"><h2><b> KẾT QUẢ TÌM KIẾM: </b></h2> </div>
	

</div>
			<!-- FOOTER -->
<?php include("pageload/footer.php"); ?>
    		<!-- JavaScripts -->
<?php include("pageload/js.php"); ?>
</body>
</html>