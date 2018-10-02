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
	require_once("config/connect.php");
	$kode_booking=$_GET["idd"];//nangkep dari proses GET
	$rs=mysql_query("select * from tab_booking where kode_booking='$kode_booking'");
	$baca=mysql_fetch_array($rs);
		$ruang=$baca["ruang"];
		$hh=$baca["start_date"];
		$end_date=$baca["end_date"];
		$dedicated=$baca["dedicated"];
		$content=$baca["content"];
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
      <td width="758"><form id="form1" name="form1" method="post" action="proses_edit_news.php?id=<?=$kode_berita?>">
          <table width="360" border="0" align="center">
            <tr>
              <td height="18" class="header_style"><div align="center" class="header_style">Edit Booking</div></td>
            </tr>
            <tr>
              <td><table width="350" border="0" align="center">
                  <tr>
                    <td width="125" class="writing"><div align="left">Room : </div></td>
                    <td width="215"><label>
                      <select name="ruang">
                  <option value="Anggrek" <?= ($ruang=="Anggrek") ?"selected":"" ?>  >Anggrek</option>
                  <option value="Catelia" <?= ($ruang=="Catelia") ?"selected":"" ?>  >Catelia</option>
                  <option value="Commitment" <?= ($ruang=="Commitment") ?"selected":"" ?>  >Commitment</option>
                  <option value="Teamwork" <?= ($ruang=="Teamwork") ?"selected":"" ?>  >Teamwork</option>
                  <option value="Trust" <?= ($ruang=="Trust") ?"selected":"" ?>  >Trust</option>
                  <option value="Optimistic" <?= ($ruang=="Optimistic") ?"selected":"" ?>  >Optimistic</option>
                  <option value="Victory" <?= ($ruang=="Victory") ?"selected":"" ?>  >Victory</option>
                </select>
                      <div align="left">                        </div>
                    </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Hour : </div></td>
                    <td><label> </label>
                        <label></label>
                        <div align="left">
                          <select name="dd" id="dd">
                            <option>08:00 - 10:00</option>
                            <option>10:00-12:00</option>
                            <option>13:00-15:00</option>
                            <option>15:00-16:30</option>
                            <?php
				for ($i=1; $i<=31; $i++) {
				echo "<option value ='$i'> $i </option>";	
				}
			?>
                          </select>
                          <label></label>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Date</div></td>
                    <td>
                      <label></label><div align="left">
  <select name="select2" id="select">
    <?php
				for ($i=1; $i<=31; $i++) {
				echo "<option value ='$i'> $i </option>";	
				}
			?>
  </select>
</div>
                      <div align="left"></div></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Month</div></td>
                    <td><label>
                      <div align="left">
                        <select name="mm" id="select5">
                          <?php
				for ($i=1; $i<=12; $i++) {
				$month=date ("F", mktime (0,0,0,$i,1,2000));
				echo "<option value ='$i'> $month </option>";	
				}
			?>
                        </select>                      
                      </div>
                      <div align="left">
                        <label>                          </label>
                      </div>
                    </label></td>
                  </tr>
                  <tr>
                    <td class="writing"> <div align="left">Booked By :</div></td><td><label>
                      <div align="left">
                        <label>                          </label>
                        <input name="kode_karyawan" type="text" class="text_area" id="kode_karyawan" />
                      </div>
                      </label></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
        
            </tr>
            <tr>
              <td class="tabel"><label>
                  <div align="center">
                    <input type="submit" name="Submit" value="Submit" />
                  </div>
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