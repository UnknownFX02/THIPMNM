<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  require_once("../db/connection.php"); //kết nối với db 
  require_once("function.php");  //kết nối tới mớ function
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Thêm chương</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css boottrap-->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap-grid.css">
  <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../css/bootstrap-reboot.css">
  <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
    
  </head>

<body>
<?php

  if(isset($_POST["btn_submit"])) {
    $mangaid=$_POST['manga_name'];
    $name = array();
    $chapter_temp= array();
    $chapter_number = $_POST['chapter_name'];
    $chapter_id = strtr(tenManga($_POST['manga_name'])," ","-")."-chap-".$chapter_number;
    foreach ($_FILES['chap_content']['name'] as $v) {
      $name[] = $v;
    }
    foreach ($_FILES["chap_content"]["tmp_name"] as $v) {
      $chapter_temp[] = $v;
    }
    $chapter_des = "../manga/".strtolower(strtr(tenManga($mangaid)," ","-"))."/chap ".$chapter_number."/";
    $chapter_des2="manga/".strtolower(strtr(tenManga($mangaid)," ","-"))."/chap ".$chapter_number."/";
    
   // echo "count = ".count($name);
    //echo "chapter des2=".$chapter_des2; exit;
    //mkdir($chapter_des);

    //echo $chapter_des.$chapter_number; exit;
    $sql ="INSERT INTO `chapters`(
                    `chapter_id`,
                    `chapter_name`,
                    `mangaid`,
                    `updated_time`,
                    `viewer`
                )
                VALUES(
                    '$chapter_id',
                    '$chapter_number',
                    '$mangaid',
                    CURRENT_TIMESTAMP,
                    '0'
                )";
        mysqli_query($conn,$sql);
              echo "Thêm chap Thành Công";
  for($i=0;$i< count($name);$i++){
  if (!move_uploaded_file($chapter_temp[$i], $chapter_des.$name[$i])) {
        die("Lỗi hình");
  } //ko them vao database duoc lol
  $sql = "INSERT INTO `uploaded`(
                    `upload_id`,
                    `manga_name`,
                    `upload_name`,
                    `chapter_id`
                )
                VALUES(
                    NULL,
                    '$chapter_des2',
                    '{$name[$i]}',
                    'chapter_id'
                )";
              // thực thi câu $sql với biến conn lấy từ file connection.php
              mysqli_query($conn,$sql);
              echo "Thêm content Thành Công";
          }
        }
  ?>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Thêm chap truyện</h2>
      </div>

      <div class="row">
        <div class="col-md order-md-1">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="group_name">Tên Truyện</label>
              <div class="input-group">
                <select class="input-group" name="manga_name">
  <?php 
          $sql = "select * from manga";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0)
          {
            // xuất dữ liệu mỗi cột
            while($row = mysqli_fetch_assoc($result)) 
          { ?>
            <option value="<?php echo $row['mangaid']; ?>"><?php echo $row['manganame']; ?></option>
          <?php }
          } else {
                    echo "0 results";
          }
          ?>
        </select>
              </div>
            </div>
            <div class="mb-3">
              <label for="chapter_name">Tên chap (số): </label>
              <div class="input-group">
                <input type="text" class="form-control" id="chapter_name" name="chapter_name" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="chap_content">nội dung chap: </label>
              <div class="input-group">
                <input type="file" id="chap_content" name="chap_content[]" multiple required>
              </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn_submit">Thêm</button>
            <hr class="mb-0">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='index.php'" title="Hủy">Hủy</button>
            <hr class="mb-5">
          </form>
        </div>
      </div>
    </div>
<!-- Footer -->
<footer class="page-footer font-small bg-dark" >

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-white">© 2019 Copyright
    <a class="text-decoration-none text-reset" href="../index.php"> Alive Manga</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
      <!-- JavaScripts -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
  </body>
</html>