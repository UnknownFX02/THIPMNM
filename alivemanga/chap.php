<!DOCTYPE html>
<html>
<head>
	<!-- css boottrap header-->
<?php require("pageload/header.php");
	  require("js/function.php"); 		?>
<?php 
	$id = $_GET['id'];
	$chap_id = $_GET['chap'];
?>
<title><?php echo tenManga($id);?> | Chap <?php echo tenChap($chap_id); ?></title>
</head>
<body>

			<!-- HEADER -->
	<?php require("pageload/navbar.php"); ?>
			<!-- CONTENT -->

<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
	    <li class="breadcrumb-item"><a href="detail.php?id=<?php echo $id;?>"><?php echo tenManga($id);?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Chap <?php echo tenChap($chap_id); ?></li>
	  </ol>
	</nav>
	<div class="text-center" style="padding: 0;">
	<?php
		$sql= "SELECT chapters.chapter_name,chapters.chapter_id, chapters.mangaid, uploaded.manga_name, uploaded.upload_name  FROM `uploaded` INNER JOIN `chapters` ON uploaded.chapter_id = chapters.chapter_id WHERE chapters.mangaid='$id' AND chapters.chapter_id='$chap_id'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
    	 	{

	?>
		<img class="chap-content" src="<?php echo $row['manga_name'].$row['upload_name']; ?>" alt="placeholder+image">
		</br>
	
	<?php  //the end of vong lap
			}
		} else {
			 echo "0 results";
			} ?>
</div>

		<!-- thanh chọn chap -->
		   	<select class="browser-default custom-select" onchange="location = this.value;">
		<?php
		$sql= "SELECT chapters.chapter_name,chapters.chapter_id, chapters.mangaid FROM `chapters` INNER JOIN `manga` ON chapters.mangaid = manga.mangaid WHERE chapters.mangaid='$id' ORDER BY `chapters`.`chapter_name` DESC"; //order by la de sap xep theo thu tu chu tu be den lon(ASC) con DESC la nguoc lai
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
    	 	{
		?>
		<option <?php if($row['chapter_id'] == $chap_id) {?> selected <?php } ?> value="chap.php?id=<?php echo $row['mangaid'];?>&chap=<?php echo $row['chapter_id'];?>" >Chap <?php echo $row['chapter_name'];?></option>
		<?php 
			}
		} else {
			 echo "";
			} ?>

  
</select>
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