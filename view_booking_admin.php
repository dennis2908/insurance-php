<?php
	session_start();
	if ($_SESSION["loggeduser"] == "") {
		echo "<meta http-equiv= 'refresh' content='0;url=login_admin.php'>";
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>-=SFA PRU VICTORY-=</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>
<?php
	include "config/connect.php";
	$sql="select * from tab_booking";	
	$rs=mysql_query($sql);
	?>
<body>
<div align="center">
  <table width="1078" border="0" class="main_table">
    <tr>
      <td colspan="2"><?php include "content_header.php"; ?><br />
      <?php include "content_navigation_admin.php"; ?></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="758"><br />
          <form id="form1" name="form1" method="post" action="proses_delete_booking.php">
            <table width="558" border="0" align="center">
              <tr class="header_style">
                <td width="20" class="header_style"><div align="center">
                     <input type="checkbox" onclick="doSelect('form1','chk[]',this.checked)"name="checkbox" value="checkbox">
                  </div>
                  </label>
                <div align="center"></div></td>
                <td width="122" class="tabel"><div align="center">Room</div></td>
                <td width="53" class="tabel"><div align="center">Hour</div></td>
                <td width="53" class="tabel"><div align="center">Date</div></td>
                <td width="68" class="tabel"><div align="center">Month</div></td>
                <td width="205" class="tabel"><div align="center">Booked By </div></td>
			    <td width="45" class="tabel"><div align="center">Update</div></td>
              </tr>
			  <?php
			  $even = true;
		while($baca=mysql_fetch_array($rs))
		{
		   
	?>
              <tr class="table_back"   >
                <td><div align="center">
                  <input name="chk[]" type="checkbox" id="chk[]" value="<?=$baca[0]?>">
                </div></td>
                <td><?= $baca[ruang] ?></td>
                <td><?= $baca[hh] ?></td>
                <td><?= $baca[dd] ?></td>
                <td><?php if($baca[mm]==1){echo "January";}
				else if($baca[mm]==2){echo "February";}
				else if($baca[mm]==3){echo "March";}
				else if($baca[mm]==4){echo "April";}
				else if($baca[mm]==5){echo "May";}
				else if($baca[mm]==6){echo "June";}
				else if($baca[mm]==7){echo "July";}
				else if($baca[mm]==8){echo "August";}
				else if($baca[mm]==9){echo "September";}
				else if($baca[mm]==10){echo "October";}
				else if($baca[mm]==11){echo "November";}
				else if($baca[mm]==12){echo "December";}
				?>
				</td>
                <td><?= $baca[kode_karyawan] ?></td>
				<td><a href="edit_booking.php?idd=<?= $baca["kode_booking"] ?>">Edit</a></td>
              </tr>
			   <?php
			
		}
	?>
         
              <tr>
                <td colspan="7" class="tabel"><label>
                  <input type="submit" name="Submit" value="Delete" />
                </label></td>
              </tr>
            </table>
      </form></td>
      <td width="150" valign="top"><?php include "content_kiri_admin.php"; ?></td>
    </tr>
    <tr>
      <td colspan="2"><?php include "content_footer.php"; ?>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
<?php
	mysql_close($con);
?>