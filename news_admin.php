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
	$err=$_GET["err"];
	require_once("config/connect.php");
	
	$sql="select * from tab_berita";	
	$rs=mysql_query($sql);

$num=mysql_num_rows($rs);
?>
<body>
<div align="center">
  <table width="918" border="0" class="main_table">
    <tr>
      <td colspan="2"><?php include "content_header.php"; ?><br />
      <?php include "content_navigation_admin.php"; ?></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="758"><p align="center"><a href="form_news.php"><img src="images/comment_add.gif" width="30" height="30" border="0" /><img src="images/new-news.gif" width="87" height="25" border="0" /></a></p>
          <form id="form1" name="form1" method="post" action="orosws_delete_news.php">
            <table width="700" border="0" align="center">
              <tr class="header_style">
                <td width="20" class="tabel"><label>
                  <input type="checkbox" onclick="doSelect('form1','chk[]',this.checked)"name="checkbox" value="checkbox">
                </label></td>
                <td width="122" class="tabel"><div align="center">News Title </div></td>
                <td width="50" class="tabel"><div align="center">Start Date </div></td>
                <td width="50" class="tabel"><div align="center">End Date </div></td>
                <td width="82" class="tabel"><div align="center">Dedicated To</div></td>
                <td width="303" class="tabel"><div align="center">Content</div></td>
                <td width="43" class="tabel">Update</td>
              </tr>
              <?php
		while($baca=mysql_fetch_array($rs))
		{
	?>
              <tr>
                <td><input name="chk[]" type="checkbox" id="chk[]" value="<?=$baca[0]?>"></td>
                <td><?= $baca[nama_berita] ?></td>
                <td><?= $baca[start_date] ?></td>
                <td><?= $baca[end_date] ?></td>
                <td><?= $baca[dedicated] ?></td>
                <td><?= $baca[content] ?></td>
                <td><a href="edit_news.php?idd=<?= $baca["kode_berita"] ?>">Edit</a></td>
              </tr>
              <tr>
                <td height="18" colspan="7"><p>
                  <input type="submit" name="Submit" value="delete" onclick="if(!confirm('Are you sure?')) return false" />
                </p>                </td>
              </tr>
              <?php
			
		}
	?>
            </table>
        </form>
          <p>&nbsp;</p></td>
      <td width="150" valign="top"><?php include "content_kiri_admin.php"; ?></td>
    </tr>
    <tr>
      <td colspan="2"><?php include "content_footer.php"; ?>&nbsp;</td>
    </tr>
  </table>
f</div>
</body>
</html>
