<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		include('../connect/connect.php');
		$name = $_POST['txtname'];
		$date = $_POST['txtdate'];
		$title = $_POST['txttitle'];
		$noidung = $_POST['txtarea'];



       $sql = "INSERT INTO `ykienkh` (`YK_Ma`, `YK_Ngay`, `YK_NguoiGui`, `YK_TieuDe`, `Yk_NoiDung`) VALUES (NULL, '$date', '$name', '$title', '$noidung')";
       $result = mysqli_query($conn,$sql);
       header('location:../giaodien2.php?menu=phanhoi');

	?>
	
</body>
</html>