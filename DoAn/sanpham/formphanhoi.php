<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
function validate(){
	var name = document.forms['form1'].txtname.value;
	if(name == ''){
			alert('bạn cần nhập họ tên của bạn !');
			document.form1.txtname.focus();
			return;
		}
		var date = document.form1.txtdate.value;
		if (date =='') {
			alert('Bạn cần chọn ngày !');
			document.form1.txtdate.focus();
			return;
		}
		var title = document.forms['form1'].txttitle.value;
	if(title == ''){
			alert('bạn cần nhập tiêu đề !');
			document.form1.txttitle.focus();
			return;
		}	
		var noidung = document.forms['form1'].txtarea.value;
	if(noidung == ''){
			alert('bạn cần nhập đầy đủ nội dung !');
			document.form1.txtarea.focus();
			return;
		}		
		
		document.forms['form1'].submit();
		confirm('Gửi thành công');
	}
</script>
</head>
<body>
<div class="formphanhoi">
	<form method="post" action="xuly/addformphanhoi.php" name="form1">
    	<table align="center" height="300px">
        	<tr>
            	<td colspan="2" align="center" style="color:#0F3"><h2>Ý Kiến khách Hàng</h2> </td>
            </tr>
            <tr>
            	<td>Người gửi :</td>
                <td><input type="text" placeholder="..." class="form-control" name="txtname" style="width:350px;height:30px" /></td>
            </tr>
            <tr>
            	<td>
            		Ngày :
            	</td>
            	<td>
            		<input class="form-control" type="date" name="txtdate" />
            	</td>
            </tr>
            <tr>
            	<td>Tiêu đề :</td>	
                <td><input type="text" placeholder="..." class="form-control" name="txttitle"  style="width:350px;height:30px"  /></td>
            </tr>
            <tr>
            	<td>Nội dung: </td>
                <td><textarea class="form-control" placeholder="..." name="txtarea"  cols="40" rows="7"></textarea></td>
            </tr>
            <tr>
            	<td colspan="2" align="center"><input class="btn btn-primary" type="button" name="btnsubmit" onclick="return validate()" value="Gửi"  />
                							   <input class="btn btn-primary" type="reset" name="reset" value="Nhập lại" />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>