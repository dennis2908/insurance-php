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
<title>-=SFA PRU VICTORY-= </title>
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
	include "config/functions.php";
	$kode=$_SESSION["loggeduser"];
	$search=$_REQUEST["search"];
	$select=$_REQUEST["select"];
	if($search==""||$select==""){
	$sql="select * from mskaryawan";	
	}else {
		if($select=='nama')$sql="select * from mskaryawan where kode_karyawan and nama_karyawan like '%$search%'";	
		elseif($select=='status')$sql="select * from mskaryawan where kode_karyawan and status like '%$search'%";	
		elseif($select=='alamat')$sql="select * from mskaryawan where kode_karyawan and address like '%$search%'";	
	}
	$rs=mysql_query($sql);

$num=mysql_num_rows($rs);
?>
<body>
<div align="center">
  <table width="900" border="0" class="main_table">
    <tr>
      <td colspan="2"><?php include "content_header.php"; ?><br />
      <?php include "content_navigation_admin.php"; ?></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="738" rowspan="3"><a href="form_account.php"></a>
          <form id="form1" name="form1" method="post" action="proses_delete_account.php">
            <div align="center"><a href="form_account.php"><img src="images/user_add.gif" width="30" height="30" border="0" /></a><a href="form_account.php"><img src="images/New-Account.gif" width="150" height="25" border="0" /></a>
              <br /> 
              <br />
            </div>
			<?php 
			  $pageindex = ($_GET["page"]=="") ?1 : $_GET["page"];
	$rs = process_paging($sql,$pageindex,10,&$pagecount);
?>
            <table width="704" align="center">
              <tr class="header_style">
                <td width="22" class="tabel"><label>
                    <div align="center">
                      <input type="checkbox" name="checkbox" value="checkbox" />
                    </div>
                </label></td>
                <td width="68" class="tabel"><div align="center" class="header_style">Kd Agent </div></td>
         
                <td width="79" class="tabel"><div align="center">Birthdate</div></td>
                <td width="50" class="tabel"><div align="center">Type</div></td>
                <td width="190" class="tabel"><div align="center">Full Name</div></td>
                <td width="58" class="tabel"><div align="center">Kd Unit </div></td>
                <td width="146" class="tabel"><div align="center">Nama Unit </div></td>
                <td width="55" class="tabel"><div align="center">Update</div></td>
              </tr>
			    <?php  			  $even = true;
		while($baca=mysql_fetch_array($rs))
		{
	?>
             <tr class="table_back"   >
                <td><div align="left">
                  <input name="chk[]" type="checkbox" id="chk[]" value="<?=$baca[0]?>">
                </div></td>
                <td><div align="left">
                  <?= $baca[kode_karyawan] ?>
                </div></td>
                <td><div align="left">
                  <?= $baca[tgl_lahir] ?>
                </div></td>
                <td><div align="left">
                  <?= $baca[status] ?>
                </div></td>
                <td><div align="left">
                  <?= $baca[nama_karyawan] ?>
                </div></td>
                <td><div align="left">
                  <?= $baca[kode_unit] ?>
                </div></td>
                <td><div align="left">
                  <?= $baca[nama_unit] ?>
                </div></td>
                <td><div align="center"><a href="edit_account.php?idd=<?= $baca["kode_karyawan"] ?>"></a> <a href="edit_account.php?idd=<?= $baca["kode_karyawan"] ?>">Edit</a></div></td>
              </tr>
			    <?php
			
		}
	?>
              <tr>
                <td colspan="9" class="tabel"><label>
                  <input type="submit" name="Submit" value="Delete" />
                </label></td>
              </tr>
              <tr>
                <td colspan="9" class="tabel"><?php
	create_navigation($pageindex,$pagecount);
?></td>
              </tr>
            </table>
			<p>&nbsp;</p>
        </form>      </td>
      <td width="150" valign="top"><table width="183" border="0">
        <tr>
          <td><div align="right"><strong>Account Search</strong></div></td>
        </tr>
        <tr>
          <td width="178"><div align="right">
              <input type="text" name="textfield" />
          </div></td>
        </tr>
        <tr>
          <td><form id="form1" name="form1" method="post" action="">
              <label></label>
              <div align="right">
                <label> <strong>Search by :</strong>
                  <select name="select">
                    <option>Nama</option>
                    <option>Kode Agent</option>
                    <option>Alamat</option>
                  </select>
                </label>
              </div>
          </form></td>
        </tr>
        <tr>
          <td><form id="form2" name="form2" method="post" action="">
              <label></label>
              <div align="right">
                <input type="submit" name="Submit2" value="Search" />
              </div>
          </form></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top"><?php include "content_kiri_admin.php"; ?></td>
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