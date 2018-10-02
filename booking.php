<?php
	session_start();
	if ($_SESSION["loggeduser"] == "") {
		echo "<meta http-equiv= 'refresh' content='0;url=login.php'>";
		exit;
	}
	if($_SESSION["status"]=="Agent"){
	  echo "<script>alert('anda tidak boleh mengakses bagian ini')</script>";
	  echo "<meta http-equiv= 'refresh' content='0;url=home.php'>";
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
      <td width="758"><form id="form1" name="form1" method="post" action="proses_booking.php">
          <div align="center">
            <p><a href="view_booking.php"><img src="images/clock.gif" width="30" height="30" border="0" /></a><a href="view_booking.php"><img src="images/view-room-schedule.gif" width="159" height="25" border="0" /></a></p>
          </div>
          <table width="400" align="center">
            <tr> 
              <td colspan="4" td height="18" class="header_style"><div align="center" class="header_style">Meeting Room Booking </div></td>
            </tr>
            <tr>
              <td width="111" class="alternate_style"><div align="center"> <span class="writing">Room </span><br />
                <select name="ruang">
                  <option value="Anggrek">Anggrek</option>
                  <option value="Catelia">Catelia</option>
                  <option value="Commitment">Commitment</option>
                  <option value="Teamwork">Teamwork</option>
                  <option value="Trust">Trust</option>
                  <option value="Optimistic">Optimistic</option>
                  <option value="Victory">Victory</option>
                </select>
              </div></td>
              <td width="72" class="alternate_style"><label>
                <div align="center">
                  <span class="writing">Hour </span><br />
                  <select name="hh" id="hh">
                            <?php
				for ($i=0; $i<=24; $i++) {
				echo "<option value ='$i'> $i </option>";
				}
				?>
                  </select>
                </div>
              </label></td>
              <td width="64" class="alternate_style"><label>
              <div align="center">
                <span class="writing">Day</span> <br />
				<select name="dd" id="dd">
                  <?php
				for ($i=1; $i<=31; $i++) {
				echo "<option value ='$i'> $i </option>";	
				}
			?>
                </select>
              </div>
              </label></td>
              <td width="73" class="alternate_style"><label>
              <div align="center">
                <span class="writing">Month </span><br /> 
                <select name="mm" id="mm">
                  <?php
				for ($i=1; $i<=12; $i++) {
				$month=date ("F", mktime (0,0,0,$i,1,2000));
				echo "<option value ='$i'> $month </option>";	
				}
			?>
                </select>
              </div>
              </label></td>
            </tr>
            <tr>
              <td colspan="4" class="tabel">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4" class="tabel"><label>
                  <div align="center">
                    <input type="submit" name="Submit" value="Submit" />
                </div>
                </label></td>
            </tr>
          </table>
      </form></td>
      <td width="150" valign="top"><?php include "content_kiri.php"; ?></td>
    </tr>
    <tr>
      <td colspan="2"><?php include "content_footer.php"; ?>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
