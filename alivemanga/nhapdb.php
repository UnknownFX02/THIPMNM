<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>PopOver Example</title>
<?php include("pageload/header.php"); require("js/function.php"); ?>
   </head>
   <body>
<?php 
$chap_name="black-clover-chap-";
//$chapter_num=0;
$mangaid=14;
 $updated =date('Y-m-d');
 $location="manga\naruto-gaiden\chap 2\ ";
//$chapter_num++;
$stt=220;
for($i=1;$i<=58;$i++){
//$sql="INSERT INTO `chapters` (`chapter_id`, `chapter_name`, `mangaid`, `updated_time`) VALUES ('Death-note-chap-$i', '$i', '$mangaid', '$updated')";                                   //lệnh nhập chap truyện
// thực thi câu $sql với biến conn lấy từ file connection.php
//$sql = "INSERT INTO `uploaded` (`upload_id`, `manga_name`, `upload_name`, `chapter_id`) VALUES (NULL, \'manga\\\\naruto-gaiden\\\\chap 4\\\\\', \'$i.jpg\', \'Naruto-gaiden-chap-4\')";     //lệnh nhập content
//$sql="UPDATE `uploaded` SET `manga_name` = 'manga\\naruto-gaiden\\chap 2\\' WHERE `uploaded`.`upload_id` = $stt";
//$sql = "UPDATE `uploaded` SET `manga_name` = \'manga\\\\naruto-gaiden\\\\chap 2\\\\\' WHERE `uploaded`.`upload_id` = $stt";                                          //lệnh chỉnh sửa
//$stt++;
$sql="DELETE FROM `chapters` WHERE `chapters`.`chapter_id` = 'Naruto-gaiden-chap-$i'";     //xóa
              mysqli_query($conn,$sql);
              echo "Thêm Truyện Thành Công";
}
?>
   </body>
</html>