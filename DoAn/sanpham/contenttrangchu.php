<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.image:hover {
    padding:10px;
}
</style>
</head>
<body>
	<h2 style="color:#090; padding: 10px 0px 10px 0px;font-size: 30px;" class="text-center"><b><i>Toàn bộ sản phẩm</i></b></h2>
	<div class="container-fluid">
		<div class="row">
	<?php 
		$sql = 'select * from sanpham';
		$result = mysqli_query($conn,$sql);
	?>
	
    	<?php 
			while($row = mysqli_fetch_array($result)){
				$sp_ma = $row['SP_Ma'];
				$id_danhmuc = $row['ID_DanhMuc'];
				$sp_ten = $row['SP_Ten'];
				$sp_anh = $row['SP_Anh'];
				$sp_dongia = $row['SP_DonGia'];
				$sp_ngayban = $row['SP_NgayBan'];
				$sp_tinhtrang = $row['SP_TinhTrang'];
		?>
        	
        	<!-- <div style="width:25%; border:1px solid #00CC99; float:left;background:#fff;text-align:center;padding:2px" > -->
        		<div class="col-md-3 col-sm-4" style="margin: 10px 0px 5px 0px">
            	<img class="image"  src="image/<?php echo $sp_anh; ?>" width="100%" height="350px" />
            	<p><h4 class="text-center"><a href="giaodien3.php?sp_ma=<?php echo $sp_ma;?>"><b><?php echo $sp_ten; ?></b></a></h4></p>
                <p class="text-center">Đơn Giá : <?php echo $sp_dongia; ?></p>
                <p class="text-center">Tình trạng : <?php echo $sp_tinhtrang; ?></p>
                <div class="text-center">
                <a href="giaodien3.php?sp_ma=<?php echo $sp_ma;?>"> <button type="button" class="btn btn-primary btn-md">Mua</button> </a>
                <button type="button" class="btn btn-primary btn-md">Thêm</button>
                </div>
                </div>
            <!-- </div> -->
        <?php
				}
		?>
		</div>
		</div>
</body>
</html>