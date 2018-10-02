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
<script src="script.js"></script>
</head>
<?php
	require_once("config/connect.php");
	$ctr_tgl=0;
	$kode_sfa=$_GET["idd"];//nangkep dari proses GET
	$rs=mysql_query("select * from mscontact where kode_sfa='$kode_sfa'");
	$baca=mysql_fetch_array($rs);
		$type_contact=$baca["type_contact"];
		$name=$baca["name"];
		$address=$baca["address"];
		$company_address=$baca["company_address"];
		$phone=$baca["phone"];
		$mobile_phone=$baca["mobile_phone"];
		$email=$baca["email"];
		$company=$baca["company"];
		$source=$baca["source"];
		$dd=$baca["dd"];
		$mm=$baca["mm"];
		$yy=$baca["yy"];
		$fact=$baca["fact"];
		$follow_up=$baca["follow_up"];
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
      <td width="733"><form id="form1" name="form1" method="post" action="proses_edit_contact.php?id=<?=$kode_sfa?>">
          <table width="360" border="0" align="center">
            <tr>
              <td height="18" class="header_style"><div align="center" class="header_style">Edit Contact </div></td>
            </tr>
            <tr>
              <td width="463"><table width="350" border="0" align="center" bgcolor="#FFFFFF">
                <tr>
                  <td class="writing"><div align="left">Type : </div></td>
                  <td class="writing"><label>
                      <div align="left">
                        <label>
                        <select name="type_contact" id="type_contact">
                          <option value="Customers" <?= ($type_contact=="Customers") ?"selected":"" ?>  >Customers</option>
                          <option value="Agents"    <?= ($type_contact=="Agents") ?"selected":"" ?>>Agents</option>
                          <option value="Friends"   <?= ($type_contact=="Friends") ?"selected":"" ?>>Friends</option>
                          <option value="Family"    <?= ($type_contact=="Family") ?"selected":"" ?>>Family</option>
                          <option value="Others"    <?= ($type_contact=="Others") ?"selected":"" ?>>Others</option>
                        </select>
                        </label>
                      </div>
                    </label></td>
                </tr>
                  <tr>
                    <td width="122" class="writing"><div align="left">Name : </div></td>
                    <td width="218"><label>
                        <div align="left">
                          <input name="name" type="text" class="text_area" id="name" value="<?=$name?>" />
</div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Address : </div></td>
                    <td><label>                      <div align="left">
                        <textarea name="address" cols="20" class="text_area" id="address"><?=$address?>
                        </textarea>
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Phone  : </div></td>
                    <td><label>
                        <div align="left">
                          <input name="phone" type="text" class="text_area" id="phone" value="<?=$phone?>" />
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Mobile Phone  : </div></td>
                    <td><label>
                        <div align="left">
                          <input name="mobile_phone" type="text" class="text_area" id="mobile_phone" value="<?=$mobile_phone?>" />
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">E-mail : </div></td>
                    <td><label>
                        <div align="left">
                          <input name="email" type="text" class="text_area" id="email" value="<?=$email?>" />
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Company : </div></td>
                    <td><label>
                        <div align="left">
                          <input name="company" type="text" class="text_area" id="company" value="<?=$company?>" />
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Company Address : </div></td>
                    <td><label>
                        <div align="left">
                          <input name="company_address" type="text" class="text_area" id="company_address" value="<?=$company_address?>" />
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Source : </div></td>
                    <td><label>
                        <div align="left">
                          <input name="source" type="text" class="text_area" id="source" value="<?=$source?>" />
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Birth Date : </div></td>
                    <td><label> </label>
                        <label></label>
                        <div align="left">
                          <select name="dd" id="dd">
                            <?php
				for ($i=0; $i<=31; $i++) {
				if($ctr_tgl==0){ $rest = substr($baca[tgl], -2);echo "<option value ='$rest'> $rest </option>";  $ctr_tgl=1;}else{
				echo "<option value ='$i'> $i </option>";}
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
				for ($i=2008; $i>=1930; $i--) {
				echo "<option value ='$i'> $i </option>";	
				}
			?>
                          </select>
                          <label></label>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Fact : </div></td>
                    <td><label>
                        <div align="left">
                          <textarea name="fact" class="text_area" id="fact"><?=$fact?>
                          </textarea>
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Follow Up : </div></td>
                    <td><label>
                        <div align="left">
                          <textarea name="follow_up" class="text_area" id="follow_up"><?=$follow_up?>
                          </textarea>
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td class="writing"><div align="left">Picture : </div></td>
                    <td><label></label>
                        <input name="file" type="file" />
                        <div align="left"></div></td>
                  </tr>
                  <tr>
                    <td height="42" class="writing">Ilustrasi : </td>
                    <td><input name="file2" type="file" />
                        <br /></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td class="writing">&nbsp;</td>
            </tr>
            <tr>
              <td class="writing"><label> </label>
                  <div align="center" class="tabel">
                    <div align="center">
                      <input type="submit" name="Submit" value="Save" />
                      <label>
                      <input type="reset" name="Submit2" value="Reset" />
                      </label>
                    </div>
                  </div></td>
            </tr>
          </table>
      </form></td>
      <td width="155" valign="top"><?php include "content_kiri.php"; ?></td>
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
