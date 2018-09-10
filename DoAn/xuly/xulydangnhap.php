<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php 
		include('../connect/connect.php');
		
		$taikhoan = $_POST['taikhoan'];
		$matkhau = $_POST['matkhau'];
	
		$sql = "SELECT `KH_Ma`, `KH_HoTen` `KH_GioiTinh`, `KH_DiaChi`, `KH_DienThoai`, `KH_Email`, `KH_TenDangNhap`, `KH_MatKhau` FROM `tk_khachang` WHERE KH_TenDangNhap = '".$taikhoan."' and KH_MatKhau ='".$matkhau."'";

		$reusult = mysqli_query($conn,$sql);
		if (!$sql) {
   		 die("Lỗi kết nối tới cơ sở dữ liệu");
		}
		$row = mysqli_fetch_assoc($reusult);
		
		if($row > 0){
			$_SESSION['KH_TenDangNhap'] = $taikhoan;
			header("Location:http://localhost/DoAn/giaodien.php?menu=trangchu");
			}else{
				header('Location: ../giaodien2.php?menu=dangnhap');
				}
	?>
</body>
</html>