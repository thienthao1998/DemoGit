<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php 
		include('../connect/connect.php');
		$hoten = $_POST['txthoten'];
		$gioitinh = $_POST['rd'];
		$diachi = $_POST['txtdiachi'];
		$dienthoai = $_POST['txtdienthoai'];
		$email = $_POST['txtemail'];
		$taikhoan = $_POST['txttaikhoan'];
		$matkhau = $_POST['txtmatkhau'];
		
		$sql = "INSERT INTO `tk_khachang` (`KH_Ma`, `KH_HoTen`, `KH_GioiTinh`, `KH_DiaChi`, `KH_DienThoai`, `KH_Email`, `KH_TenDangNhap`, `KH_MatKhau`) VALUES (NULL, '$hoten', '$gioitinh', '$diachi', '$dienthoai', '$email', '$taikhoan', '$matkhau')";
		$result = mysqli_query($conn,$sql);
		header('location:../giaodien2.php?menu=dangky');
	?>
</body>
</html>