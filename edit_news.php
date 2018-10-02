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
	$kode_berita=$_GET["idd"];//nangkep dari proses GET
	$rs=mysql_query("select * from tab_berita where kode_berita='$kode_berita'");
	$baca=mysql_fetch_array($rs);
		$nama_berita=$baca["nama_berita"];
		$start_date=$baca["start_date"];
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
              <td height="18" class="header_style"><div align="center" class="header_style">Edit News </div></td>
            </tr>
            <tr>
              <td><table width="350" border="0" align="center">
                  <tr>
                    <td width="140" class="writing"><div align="left">News Title : </div></td>
                    <td width="280"><label>
                        <div align="left">
                          <input name="nama_berita" type="text" class="text_area" id="nama_berita" value="<?=$nama_berita?>" />
                        </div>
                    </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Start Date : </div></td>
                    <td><label> </label>
                        <label></label>
                        <div align="left">
                          <select name="dd" id="dd">
                            <?php
				for ($i=1; $i<=31; $i++) {
				echo "<option value ='$i'> $i </option>";	
				}
			?>
                          </select>
                          <select name="mm" id="mm">
                            <?php
				for ($i=1; $i<=12; $i++) {
				$month=date ("F", mktime (0,0,0,$i,1,2000));
				echo "<option value ='$i'> $month </option>";	
				}
			?>
                          </select>
                          <select name="yy" id="yy">
                            <?php
				for ($i=2008; $i<=2015; $i++) {
				echo "<option value ='$i'> $i </option>";	
				}
			?>
                          </select>
                          <label></label>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">End Date : </div></td>
                    <td>
                      <label></label>
<div align="left">
  <select name="select2" id="select">
    <?php
				for ($i=1; $i<=31; $i++) {
				echo "<option value ='$i'> $i </option>";	
				}
			?>
  </select>
  <select name="select3" id="select2">
    <?php
				for ($i=1; $i<=12; $i++) {
				$month=date ("F", mktime (0,0,0,$i,1,2000));
				echo "<option value ='$i'> $month </option>";	
				}
			?>
  </select>
  <select name="select4" id="select3">
    <?php
				for ($i=2008; $i<=2015; $i++) {
				echo "<option value ='$i'> $i </option>";	
				}
			?>
  </select>
</div><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Dedicated To :</div></td>
                    <td><label>
                        <div align="left">
                          <label>
                          <select name="dedicated" id="dedicated">
                            <option>All</option>
                            <option>All Agents</option>
                            <option>All Leaders</option>
                            <option>PUM</option>
                            <option>SUM</option>
                            <option>UM</option>
                            <option>AM</option>
                            <option>SAM</option>
                          </select>
                          </label>
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"> <div align="left">Content : </div></td><td><label>
                        <div align="left">
                          <label>
                          <textarea name="content" class="text_area" id="content"><?=$content?>
						  </textarea>
                          </label>
                        </div>
                      </label></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td class="tabel">&nbsp;</td>
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
