<?php
	session_start();
	if ($_SESSION["loggeduser"] == "") {
		echo "<meta http-equiv= 'refresh' content='0;url=login.php'>";
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
<style type="text/css">
<!--
.style1 {color: #990000}
-->
</style>
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
      <?php include "content_navigation.php"; ?></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="758"><p><a href="form_news.php"></a></p>
        <p>&nbsp;</p>
        <table width="155" border="0" align="center">
          <?php
		while($baca=mysql_fetch_array($rs))
		{
	?>
          <tr>
            <td width="149"><table width="600" height="112" border="0" align="center">
                <tr>
                  <td colspan="2" height="20" class="header_style"><div align="center">
                      <?= $baca[nama_berita] ?>
                  </div></td>
                </tr>
                <tr>
                  <td width="120">Start Date : </td>
                  <td width="470"><?= $baca[start_date] ?></td>
                </tr>
                <tr>
                  <td>End Date : </td>
                  <td><?= $baca[end_date] ?></td>
                </tr>
                <tr>
                  <td>Dedicated To : </td>
                  <td><?= $baca[dedicated] ?></td>
                </tr>
                <tr>
                  <td>Content : </td>
                  <td><?= $baca[content] ?></td>
                </tr>
                <tr>
                  <td colspan="2"><span class="style1">__________________________________________________________________________</span></td>
                </tr>
            </table></td>
          </tr>
          <?php
			
		}
	?>
        </table>
        <p>&nbsp;</p></td>
      <td width="150" valign="top"><?php include "content_kiri.php"; ?></td>
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