<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['email'])) {
	 header('Location: login.php');
}
else{
?>
<html>
<head>
	<title>trang chủ</title>
	<meta charset="utf-8">
</head>
<body>
	<div>Chúc mừng <?php echo $_SESSION['email'];}  ?> đã đăng nhập thành công ! <div>
		<a href="logout.php" > Log out</a>
</body>
</html>