
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
    
	<form action="xuly/xulydangnhap.php" method="post">
    	<table width="300px" height="200px" align="center">
        	<tr>
            	<td colspan="2" style="color:#0C0" align="center"><h1>ĐĂNG NHẬP</h1></td>
            </tr>
            <tr>
            	<td>Tài khoản :</td>
                <td><input type="text" name="taikhoan"  required/></td>
            </tr>
            <tr>
            	<td>Mật khẩu :</td>
                <td><input type="password" name="matkhau"  required/></td>
            </tr>
            <tr>
            	<td colspan="2" style="color:#000" align="center">
                	<input class="btn btn-primary" type="submit" name="dangnhap" value="Đăng nhập"  />
                	<a href="giaodien2.php?menu=dangky" style="color:#000; text-decoration:none"><input class="btn btn-primary" type="button" name="dangky" value="Đăng ký"  /></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>