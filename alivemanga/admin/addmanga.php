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
    <title>Thêm Truyện</title>
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
  $manga_name = $_POST['manga_name'];
   // $_POST["group_name"];
  $trans = $_POST["trans"];
  $theloai = $_POST['group_name'];
  // $newchap = 0;
  //$updated =date('Y-m-d');
  $other_name = $_POST["other_name"];
  $description = $_POST["description"];
  //$viewer = 0;
  $actor = $_POST["actor"];
  
  $cover_des = "../images/cover/";
  $cover_name = basename($_FILES["cover_manga"]["name"]);
  $cover_temp=$_FILES["cover_manga"]["tmp_name"];
  $extension = substr($cover_name, strpos($cover_name,'.') +1);
  if(!ktTruyen($manga_name))
    echo "Truyện đã tồn tại";
    else
  if($extension != "jpg" && $extension != "jpeg" && $extension != "png")
    echo "sai định dạng file hình";
  else{
   if (!move_uploaded_file($cover_temp, $cover_des.$cover_name)) {
        die("Lỗi hình"); exit;
    }
  $sql = "INSERT INTO `manga` (
                  `mangaid`,
                  `manganame`,
                  `trans`,
                  `newchap`,
                  `other_name`,
                  `description`,
                  `viewer`,
                  `actor`,
                  `conditions`,
                  `manga_cover`,
                  `ma_loaitr`
                ) VALUES (
                NULL,
                '$manga_name',
                '$trans',
                '0',
                '$other_name',
                '$description',
                '0',
                '$actor',
                'Đang Tiến Hành',
                '$cover_name',
                '$theloai'
              )";
              // thực thi câu $sql với biến conn lấy từ file connection.php
              mysqli_query($conn,$sql);
              $newfolder = "../manga/".strtolower(strtr($manga_name," ","-")); //chưa bỏ được kí tự đặc biệt
              mkdir($newfolder);
              echo "Thêm Truyện Thành Công";
              unset($_POST);
            }
  }
  ?>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Thêm Truyện</h2>
      </div>

      <div class="row">
        <div class="col-md order-md-1">
          <form action="" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="manga_name">Tên Truyện</label>
              <div class="input-group">
                <input type="text" class="form-control" id="manga_name" name="manga_name" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="group_name">Thể Loại</label>
              <div class="input-group">
                <select class="input-group" name="group_name">
  <?php 
          $sql = "select * from groupmanga";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0)
          {
            // xuất dữ liệu mỗi cột
            while($row = mysqli_fetch_assoc($result)) 
          { ?>
            <option value="<?php echo $row['ma_loaitr']; ?>"><?php echo $row['loaitr']; ?></option>
          <?php }
          } else {
                    echo "0 results";
          }
          ?>
				</select>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="trans">Nhóm dịch:</label>
              <div class="input-group">
                <input type="text" class="form-control" id="trans" name="trans">
              </div>
            </div>
			
      <div class="mb-3">
              <label for="other_name">Tên Khác:</label>
              <div class="input-group">
                <input type="text" class="form-control" id="other_name" name="other_name">
              </div>
            </div>

      <div class="mb-3">
              <label for="actor">Tác Giả:</label>
              <div class="input-group">
                <input type="text" class="form-control" id="actor" name="actor">
              </div>
            </div>

			<div class="mb-3">
              <label for="description">Mô tả:</label>
              <div class="input-group">
                <textarea class="form-control" id="description" name="description"></textarea>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="cover_manga">Bìa truyện: </label>
              <div class="input-group">
                <input type="file" id="cover_manga" name="cover_manga" required>
              </div>
            </div>
			
            
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn_submit" title="Thêm" >Thêm</button>
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