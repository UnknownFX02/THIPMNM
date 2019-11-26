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
