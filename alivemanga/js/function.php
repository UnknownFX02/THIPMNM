<?php

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
	function loaiTaiKhoan($maloai)
		{
			require("db/connection.php");
			//require("db/connection.php");
			$sql= "SELECT groupuser.group_name FROM `groupuser` INNER JOIN `user` ON groupuser.group_id = user.group_id WHERE user.group_id='$maloai' ";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0)
				{
    				$row = mysqli_fetch_assoc($result);
    				return $row['group_name'];
				} else return 0;
	}

	function tenManga($ma)
	{
		require("db/connection.php");
		$sql = "SELECT * FROM `manga` WHERE mangaid = '$ma'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
				{
    				$row = mysqli_fetch_assoc($result);
    				return $row['manganame'];
				} else return 0;
		}

	function tenChap($ma)
	{
		require("db/connection.php");
		$sql = "SELECT * FROM `chapters` WHERE chapter_id = '$ma'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
				{
    				$row = mysqli_fetch_assoc($result);
    				return $row['chapter_name'];
				} else return 0;
		}

	function chapMoiNhat($mangaid)
	{
		require("db/connection.php");
		$sql = "SELECT MAX(chapter_name) FROM `chapters` WHERE mangaid ='$mangaid'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
				{
    				$row = mysqli_fetch_assoc($result);
    				return $row['MAX(chapter_name)'];
				} else return 0;
	}

		function idChap($chapter_name,$mangaid)
	{
		require("db/connection.php");
		$sql = "SELECT chapter_id FROM `chapters` WHERE chapter_name ='$chapter_name' AND mangaid = '$mangaid'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
				{
    				$row = mysqli_fetch_assoc($result);
    				return $row['chapter_id'];
				} else return 0;
	}

	function ktMail($mail)
	{
		require("db/connection.php");
		$sql ="SELECT user_email FROM user WHERE user_email LIKE '$mail'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0)
			return false;
		return true;

	}
	function paging()
	{
	require("db/connection.php");
	$sql="SELECT count(mangaid) AS total FROM manga";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $GLOBALS['$total_records'] = $row['total'];
    $GLOBALS['$current_page'] = isset($_GET['page']) ? $_GET['page'] : 1; //echo $current_page."\n";
    $GLOBALS['$limit'] = 6;
    $$GLOBALS['$total_page'] = ceil($total_records / $limit);
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    $GLOBALS['$start'] = ($current_page - 1) * $limit;

	}

	function dinhDangNgay($date)
	{
		$time = strtotime($date);
		//$myFormatForView = date("m/d/y g:i A", $time);
		return date("d/m/Y", $time);
	}