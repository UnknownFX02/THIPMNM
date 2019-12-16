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
	    <li class="breadcrumb-item"><a class="text-decoration-none" href="index.php">Trang chủ</a></li>
	    <li class="breadcrumb-item"><a class="text-decoration-none" href="detail.php?id=<?php echo $id;?>"><?php echo tenManga($id);?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Chap <?php echo tenChap($chap_id); ?></li>
	  </ol>
	</nav>
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
	<!-- nội dung truyện -->
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
		<div class="p-2 mb-2 bg-dark text-white"><h2><b>BÌNH LUẬN (<?php echo countCMT($chap_id);?>) </b></h2> </div>
<?php
if(isset($_POST['btn_submit_cmt']) && $_POST['cmt_input']!=NULL)
{
	//print_r($_SESSION); exit;
	$cmt = $_POST['cmt_input'];
	$user_ID = $_SESSION['user_id'];
	$user_avatar = $_SESSION['avatar'];
	$chapter_id = $_GET['chap'];
	$sql = "INSERT INTO `comment` (
					`cmt_content`,
					`chapter_id`,
					`user_ID`
                ) VALUES (
                	'$cmt',
                	'$chapter_id',
                	'$user_ID'
              	)";
              	mysqli_query($conn,$sql);
              	echo "success";
}
?>
		<div class="container bg-light">
			<?php if(!isset($_SESSION['email']))
			{?> <div class ="h2 text-center "> VUI LÒNG ĐĂNG NHẬP ĐỂ BÌNH LUẬN </div>
		<?php }else{ ?>
				<form name="cmt" method="POST">
					<div class="col">
					<div class="input-group">
		                <textarea name="cmt_input" row="10" cols="110" maxlength="200" placeholder="Viết bình luận"></textarea>
		              <button type="submit" class="btn btn-primary btn-lg" name="btn_submit_cmt">Bình Luận</button>
		          </div>
		      		</div>
				</form>
				<?php }
				$sql = "SELECT * FROM comment WHERE chapter_id = '$chap_id' ORDER BY `comment`.`cmt_time` DESC";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
		    	 	{
				?>
				</br>
				<div class="media">
					  <img src="<?php echo layAvatar($row['user_ID']);?>" class="mr-3" style="width: 75px; height: 75px">
					  <div class="media-body">
					    <h5 class="mt-0"><?php echo tenUser($row['user_ID']); ?></h5>
					    <?php echo $row['cmt_content'];?>

					  </div><div class="text-black-50"><?php echo dinhDangNgay($row['cmt_time']); ?> </div>

					</div>

		<?php 	}
			} ?>
				</div>
			</div>
			<!-- FOOTER -->
<?php include("pageload/footer.php"); ?>
			<!-- JavaScripts -->
<?php include("pageload/js.php"); ?>
</body>
</html>