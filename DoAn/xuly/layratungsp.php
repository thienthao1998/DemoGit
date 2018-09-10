<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<body>
	
<?php 
		
		include('../connect/connect.php');
		$sp_ma = $_REQUEST['sp_ma'];	
		$sql = 'select * from sanpham where SP_Ma='.$sp_ma;
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
?>
		<div class="chitietsp">
    	<div class="chitietsp-anh">
        <img src="../image/<?php echo $row['SP_Anh']; ?>" width="30%" />
        </div>
        <div class="chitietsp-noidung"></div>
    </div>

	
</body>
</html>