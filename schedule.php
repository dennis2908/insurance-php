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
</script></script>
<script src="script.js"></script>
</head>
<?php
	$err=$_GET["err"];
	require_once("config/connect.php");
	include "config/functions.php";
	$kode=$_SESSION["loggeduser"];
	$sql="select * from msschedule where kode_karyawan='$kode'";
	$rs=mysql_query($sql);

$num=mysql_num_rows($rs);
?>
<body>
<div align="center">
  <table width="900" border="0" class="main_table">
    <tr>
      <td colspan="2"><?php include "content_header.php"; ?><br />
      <?php include "content_navigation.php"; ?></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="753"><div align="center"><a href="form_schedule.php"><img src="images/note_add.gif" alt="" width="30" height="30" border="0" /></a><a href="form_schedule.php"><img src="images/new-schedule.gif" width="159" height="25" border="0" /></a><br /> 
        <br />
      </div>
	  <?php 
			  $pageindex = ($_GET["page"]=="") ?1 : $_GET["page"];
	$rs = process_paging($sql,$pageindex,10,&$pagecount);
?>
        <form id="form1" name="form1" method="post" action="proses_delete_schedule.php">
        <table width="700" border="0" align="center">
              <tr class="header_style">
                <td width="20"><label>
                    <div align="center">
                      <input type="checkbox" onclick="doSelect('form1','chk[]',this.checked)"name="checkbox" value="checkbox">
                    </div>
                </label></td>
                <td width="80"><div align="center">Type</div></td>
                <td width="230"><div align="center">Subject</div></td>
                <td width="90"><div align="center">Place</div></td>
                <td width="74"><div align="center">Date </div></td>
                <td width="61"><div align="center">Time</div></td>
                <td width="62"><div align="center">Priority</div></td>
                <td width="49"><div align="center">Update </div></td>
              </tr>
			  <?php
		$even = true;
		while($baca=mysql_fetch_array($rs))
		{
		   
	?>
               <tr class="table_back"   >
                <td><input name="chk[]" type="checkbox" id="chk[]" value="<?=$baca[0]?>"></td>
                <td><?= $baca[type_schedule] ?></td>
                <td><?= $baca[subject] ?></td>
                <td><?= $baca[place] ?></td>
                <td><?= $baca[date1] ?></td>
                <td><?= $baca[time1] ?></td>
                <td><?= $baca[priority] ?></td>
                <td><a href="edit_schedule.php?idd=<?= $baca["kode_schedule"] ?>">Edit</a></td>
            </tr>
			  <?php
			
		}
	?>
              <tr>
                <td colspan="8" class="tabel"><label>
                <input type="submit" name="Submit" value="delete" onClick="if(!confirm('Are you sure?')) return false">
</label></td>
              </tr>
              <tr>
                <td colspan="8" class="tabel"><?php
	create_navigation($pageindex,$pagecount);
?></td>
              </tr>
          </table>
		  <p>&nbsp;</p>
      </form></td>
      <td width="127" valign="top"><?php include "content_kiri.php"; ?></td>
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
