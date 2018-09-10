<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
	function validate(){
		var name = document.forms['form2'].txthoten.value;
		if(name ==''){
				alert('Bạn cần nhập họ tên !');
				document.forms['form2'].txthoten.focus();
				return;
			}
		if(document.forms['form2'].rd[0].checked == false && document.forms['form2'].rd[1].checked == false) {
			alert('Bạn cần chọn một giới tính !'); 
			document.all.rd[0].focus();
			return;
			}
		var diachi = document.forms['form2'].txtdiachi.value;
		if(diachi ==''){
				alert('Bạn cần nhập địa chỉ !');
				document.forms['form2'].txtdiachi.focus();
				return;
			}
		var dienthoai = document.forms['form2'].txtdienthoai.value;
		if(dienthoai ==''){
			alert('Bạn cần nhập số điện thoại');
			document.forms['form2'].txtdienthoai.focus();
			return;
		}
		var email = document.getElementById('txtemail');
		var check = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!check.test(email.value)) { 
             alert('Hay nhap dia chi email hop le.\nExample@gmail.com');
             email.focus; 
             return; 
    	}
		var taikhoan = document.forms['form2'].txttaikhoan.value;
		if(taikhoan ==''){
			alert('Bạn cần nhập tài khoản');
			document.forms['form2'].txttaikhoan.focus();
			return;
		}
		var matkhau = document.forms['form2'].txtmatkhau.value;
		if(matkhau ==''){
			alert('Bạn cần nhập mật khẩu');
			document.forms['form2'].txtmatkhau.focus();
			return;
		}	
		confirm('Đăng ký thành công !');

	}
</script>
</head>
<body>
	<form class="form-inline" method="post"  action="xuly/xulydangky.php"  name="form2">
    	<table width="300px" height="500px" align="center">
        	<tr>
            	<td colspan="2" style="color:#0C0" align="center"><h1>Đăng ký</h1></td>
            </tr>
            <tr>
            	<td>
                	<label for="hoten">Họ & tên:</label>
                </td>
                <td>
                	<input class="form-control" type="text" name="txthoten" />
                </td>
            </tr>
            <tr>
            	<td>
                	<label for="gioitinh">Giới Tính:</label>
                </td>
                <td>
                	<input type="radio" name="rd" value="nam"/>Nam
                    <input type="radio" name="rd" value="nu"/>Nữ
                </td>
            </tr>
            <tr>
            	<td>
                	<label for="diachi">Địa Chỉ:</label>
                </td>
                <td>
                	<input class="form-control" type="text" name="txtdiachi" />
                </td>
            </tr>
            <tr>
            	<td>
                	<label for="dienthoai">Điện thoại:</label>
                </td>
                <td>
                	<input class="form-control" type="number" name="txtdienthoai" />
                </td>
            </tr>
            <tr>
            	<td>
                	<label for="email">Email:</label>
                </td>
                <td>
                	<input class="form-control" type="email" name="txtemail" id="txtemail" />
                </td>
            </tr>
            <tr>
            	<td>
                	<label for="diachi">Tài khoản:</label>
                </td>
                <td>
                	<input class="form-control" type="text" name="txttaikhoan" />
                </td>
            </tr>
            <tr>
            	<td>
                	<label for="matkhau">Mật khẩu:</label>
                </td>
                <td>
                	<input class="form-control" type="password" name="txtmatkhau" />
                </td>
            </tr>
            	<td colspan="2" align="center">
                	<input class="btn btn-primary" type="submit" name="submit" value="Đăng ký" onclick="return validate()" />
                    <input  class="btn btn-primary" type="reset" name="reset" value="Nhập lại" />
                </td>
            <tr>
            </tr>
        </table>
    </form>
</body>
</html>