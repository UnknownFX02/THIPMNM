<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>PopOver Example</title>
<?php include("pageload/header.php"); ?>
      <style>
         .btn {margin: 5px;}
      </style>
   </head>
   <body>

<?php 
//function tenLoaiManga($ma)
		//{
			 	require("db/connection.php");
        $ma =1;
				$sql= "SELECT chapters.chapter_name,chapters.chapter_id FROM `chapters` INNER JOIN `manga` ON chapters.mangaid = manga.mangaid WHERE chapters.mangaid='$ma' ORDER BY `chapters`.`chapter_name` DESC "; //order by la de sap xep theo thu tu chu tu be den lon(ASC) con DESC la nguoc lai
					$result = mysqli_query($conn, $sql);
					$a=mysqli_num_rows($result);
    				
    				while($row = mysqli_fetch_assoc($result))
              ?><div class="col"><a href="chap.php?id=<?php echo $row[' chapter_id'];?>">&nbsp&nbspChap <?php echo $row['chapter_name']; ?> </a></div><?php} ?>
		//}

		//$a=1; $b=tenLoaiManga($a); echo $b;
?>

<?php include("pageload/js.php"); ?>
 
   </body>
</html>