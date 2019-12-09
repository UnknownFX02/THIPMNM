<!-- Button trigger modal -->

<!DOCTYPE html>
<html>
<head>
	<title>TRANG CHỦ | ALIVE MANGA</title>
<?php require("pageload/header.php");
	require("js/function.php");			?>
</head>
<body>
			<!-- CONTENT -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2>Thêm Thành công</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="window.location.href='addchapter.php'">Đóng</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Về Trang Chủ</button>
      </div>
    </div>
  </div>
</div>


<?php require("pageload/js.php");?>