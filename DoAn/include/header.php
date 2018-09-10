<div class="header">
	<div class="logo">
    	<a href="giaodien.php"><img src="image/logo.png"  width="100%" height="100%" /></a>
    </div> <div class="dangnhap" style="float:right;margin-right:3px;margin-top:3px"> 
    <?php 
	session_start();
	if(isset($_SESSION['KH_TenDangNhap'])){ ?>
    Xin chào:<a href="#"><?php echo $_SESSION['KH_TenDangNhap']; ?></a>
    <a href="xuly/xulydangxuat.php" style="color:#000; text-decoration:none">
    <button type="button" class="btn btn-default" onclick="return confirm('Bạn có muốn đăng xuất ?');" >Đăng xuất</button>
    </a>
    <?php 
	}else{
		?>
			<a href="giaodien2.php?menu=dangnhap" style="color:#000; text-decoration:none"><button type="button" class="btn btn-default" >Đăng Nhập</button></a>
    		
		<?php 
		}
		?>
    <a href="giaodien2.php?menu=giohang" style="color:#000; text-decoration:none" class="btn btn-default">
          <span class="glyphicon glyphicon-shopping-cart" ></span>Giỏ hàng
        </a>
 </div>
 <form class="form-search-controls" role="search" >
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Tìm kiếm" style="width:80%;height:40px ;float:left">
     <button type="submit" class="btn btn-default" style="width:20%;height:40px  ;float:left">Tìm Kiếm</button>
  </div>

 </form>
</div>