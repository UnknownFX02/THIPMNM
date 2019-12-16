<?php
	function tenLoaiManga($ma)
		{
			require("../db/connection.php");
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
			require("../db/connection.php");
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
		require("../db/connection.php");
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
		require("../db/connection.php");
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
		require("../db/connection.php");
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
		require("../db/connection.php");
		$sql = "SELECT chapter_id FROM `chapters` WHERE chapter_name ='$chapter_name' AND mangaid = '$mangaid'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
				{
    				$row = mysqli_fetch_assoc($result);
    				return $row['chapter_id'];
				} else return 0;
	}

	function ktTruyen($manganame)
	{
		require("../db/connection.php");
		$sql ="SELECT manganame FROM manga WHERE manganame LIKE '$manganame'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0)
			return false;
		return true;
	}

		function dinhDangNgay($date)
	{
		$time = strtotime($date);
		//$myFormatForView = date("m/d/y g:i A", $time);
		return date("H:m:s d/m/Y", $time);
	}

	function tongHinh($chapter_id)
	{
		require("../db/connection.php");
		$sql ="SELECT count(upload_name) AS total FROM uploaded WHERE chapter_id = '$chapter_id'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
    	return $row['total'];
	}

