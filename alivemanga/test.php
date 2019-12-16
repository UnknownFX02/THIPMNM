<?php require("pageload/header.php"); require("db/connection.php"); require("js/function.php");  ?>
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
		<div class="container">
			<?php if(!isset($_SESSION['email'])) {?>
			<div class ="h2 text-center"> VUI LÒNG ĐĂNG NHẬP ĐỂ BÌNH LUẬN </div>
		<?php }else{ ?>
				<form name="cmt" method="POST">
					<div class="col">
					<div class="input-group">
		                <textarea name="cmt_input" row="10" cols="110" maxlength="200" placeholder="Viết bình luận"></textarea>
		              <button type="submit" class="btn btn-primary btn-lg" name="btn_submit_cmt">Bình Luận</button>
		          </div>
		      		</div>
				</form>
				<?php}
				$sql = "SELECT * FROM comment WHERE chapter_id = '$_GET['chap']' ORDER BY `comment`.`cmt_time` DESC";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
		    	 	{
				?>
				<div class="media">
					  <img src="<?php echo layAvatar($chapter_id);?>" class="mr-3" style="width: 75px; height: 75px">
					  <div class="media-body">
					    <h5 class="mt-0"><?php echo tenUser($row['user_ID']); ?></h5>
					    <?php echo $row['cmt_content']; ?>
					  </div>
					</div>
		<?php 	}
			} ?>
				</div>