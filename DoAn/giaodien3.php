<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thời trang nam Xmen</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="all">
	<div id="thoitrangnam">
    	<?php  include('connect/connect.php');?>
        <?php  include('include/header.php'); ?>
        <?php  include('include/menu.php'); ?>   
        <div class="content">
        <?php 
		
	
		$sp_ma = $_REQUEST['sp_ma'];	
		$sql = 'select * from sanpham where SP_Ma='.$sp_ma;
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		?>
		<div class="chitietsp">
    	<div class="chitietsp-anh">
        <img src="image/<?php echo $row['SP_Anh']; ?>" width="30%" />
        </div>
        <div class="chitietsp-noidung">
        <h2>Đơn Giá : <?php echo $row['SP_Ten']; ?></h2>
        <p>Đơn Giá : <?php echo $row['SP_DonGia']; ?></p>
        <p>Ngày Bán : <?php echo $row['SP_NgayBan']; ?></p>
        </div>
    </div>

        </div>
        <?php  include('include/footer.php'); ?>
	</div>
</div>
</body>
</html>