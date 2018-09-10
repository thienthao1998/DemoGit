<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<div class="tintuc">
    	<?php 
			include('connect/connect.php');
			$sql = 'select * from tintuc';
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_array($result)){
				$tt_ma = $row['TT_Ma'];
				$tt_ngay = $row['TT_Ngay'];
				$tt_tieude = $row['TT_TieuDe'];
				$tt_anh = $row['TT_Anh'];
				$tt_noidung = $row['TT_NoiDung'];	
		?>
        	<div style="width:100%; border:1px solid #00CC99; float:left;background:#fff;padding:15px" >
            <form>
            	<table border="0">
                	<tr>
                    	<td>
                        <img style="float:left" src="image/<?php echo $tt_anh; ?>"  width="100px" height="150px" />
                        </td>
                        <td>
                        	<h3><?php echo $tt_tieude ?></h3>
                			<p><?php echo $tt_noidung ?></p>
                        </td>
                    </tr>
                </table>
            </form>
            	
                
            </div>
        <?php
			}
		?>
    
    </div>
</body>
</html>