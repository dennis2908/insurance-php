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
<title>Untitled Document</title>
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
<script src="script.js"></script>
</head>
<?php
	$err=$_GET["err"];
	require_once("config/connect.php");
	
	$sql="select * from mscontact";	
	$rs=mysql_query($sql);

$num=mysql_num_rows($rs);
?>
<body>
<div align="center">
  <table width="900" border="0" class="main_table">
    <tr>
      <td colspan="2"><?php include "content_header.php"; ?><br />
      <?php include "content_navigation_admin.php"; include "functions.php";?></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right"><span class="alternate_style">Welcome,
            <?= $_SESSION["nama_karyawan"] ?>
      </span></div></td>
    </tr>
    <tr>
      <td width="730"><a href="form_contact.php"></a>
          <form name="form1" method="post" action="process_delete_contact.php">
            <div align="center">
              <p><img src="images/ourcreed.jpg" width="350" height="492" /><img src="images/poster WC copy.jpg" width="350" height="492" /></p>
              <p><img src="images/2.jpg" width="700" height="400" /></p>
            </div>
        </form></td>
      <td colspan="2" valign="top"><?php include "content_kiri_admin.php"; ?>
        <p>
          <?php include "content_top_agent.php"; ?>
        </p>
      <p>      </p>      </tr>
    <tr>
      <td height="39" colspan="2"><?php include "content_footer.php"; ?>&nbsp;</td>
    </tr>
    <tr>
      <td height="39" colspan="2">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
<?php
	mysql_close($con);
?>
