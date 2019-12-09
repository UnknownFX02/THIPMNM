<?php 
require("db/connection.php");
if(isset($_GET['chap']) && isset($_GET['id'])){
	$idchap= $_GET['chap'];
	$sql="UPDATE chapters SET viewer=viewer+1 WHERE chapter_id = '$idchap'";
	$result = mysqli_query($conn, $sql);

	$link="chap.php?id=".$_GET['id']."&chap=".$_GET['chap'];
	header("Location: $link");
}
else{
	$idtruyen= $_GET['id'];
	$sql="UPDATE manga SET viewer=viewer+1 WHERE mangaid = '$idtruyen'";
	$result = mysqli_query($conn, $sql);
	$link="detail.php?id=".$_GET['id'];
	header("Location: $link");
}