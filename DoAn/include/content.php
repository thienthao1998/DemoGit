<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>



	<div class="content">
  <?php 
  	$function = '';
        		if(!isset($_GET['menu'])){
					$function = 'trangchu';
				}else{
					$function = $_GET['menu'];
					}
				switch($function){
					case 'trangchu':{
						include('sanpham/contenttrangchu.php');
						break;
						}
					case 'aosominam':{
						include('sanpham/contentaosomi.php');
						break;
						}
					case 'aophongnam':{
						include('sanpham/aophongnam.php');
						break;
						}
					case 'aokhoacnam':{
						include('sanpham/aokhoacnam.php');
						break;
						}
					case 'aolennam':{
						include('sanpham/aolennam.php');
						break;
						}
					case 'aovestnam':{
						include('sanpham/aovestnam.php');
						break;
						}
					case 'tintuc':{
						include('sanpham/tintuc.php');
						break;
						}
					case 'gioithieu':{
						include('sanpham/gioithieu.php');
						break;
						}
					case 'phanhoi':{
						include('sanpham/formphanhoi.php');
						break;
						}
					case 'dangnhap':{
						include('dangnhap.php');
						break;
						}
					case 'dangky':{
						include('dangky.php');
						break;
						}
					case 'giohang':{
						include('sanpham/giohang.php');
						break;
						}
					
					
					
					}
			?>
    </div>
</body>
</html>