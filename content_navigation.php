<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('images/menu_mycontact2.gif','images/menu_myschedule2.gif','images/menu_home2.gif','images/menu_contact2.gif','images/menu_schedule2.gif','images/menu_training2.gif','images/menu_booking2.gif','images/menu_production2.gif','images/menu_news2.gif','images/menu_logout2.gif','images/menu_change_pass2.gif')">
<div align="right"><a href="home.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','images/menu_home2.gif',1)"><img src="images/menu_home.gif" alt="home" name="Image11" width="70" height="25" border="0" id="Image11" /></a><a href="home.php"></a><img src="images/menu_separator.gif" width="2" height="25" /><a href="home.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','images/menu_home2.gif',1)"></a><a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','images/menu_contact2.gif',1)"><img src="images/menu_contact.gif" alt="contact" name="Image12" width="70" height="25" border="0" id="Image12" /></a><a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','images/menu_contact2.gif',1)"></a><img src="images/menu_separator.gif" width="2" height="25" /><a href="schedule.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','images/menu_schedule2.gif',1)"><img src="images/menu_schedule.gif" alt="schedule" name="Image13" width="76" height="25" border="0" id="Image13" /></a><a href="schedule.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/menu_schedule2.gif',1)"></a><img src="images/menu_separator.gif" width="2" height="25" /><a href="training.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image14','','images/menu_training2.gif',1)"><img src="images/menu_training.gif" alt="training" name="Image14" width="68" height="25" border="0" id="Image14" /></a><a href="training.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/menu_training2.gif',1)"></a><img src="images/menu_separator.gif" width="2" height="25" /><a href="booking.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image15','','images/menu_booking2.gif',1)"><img src="images/menu_booking.gif" alt="booking" name="Image15" width="69" height="25" border="0" id="Image15" /></a><a href="booking.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/menu_booking2.gif',1)"></a><img src="images/menu_separator.gif" width="2" height="25" /><a href="production.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image16','','images/menu_production2.gif',1)"><img src="images/menu_production.gif" alt="production" name="Image16" width="85" height="25" border="0" id="Image16" /></a><a href="production.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/menu_production2.gif',1)"></a><img src="images/menu_separator.gif" width="2" height="25" /><a href="news.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','images/menu_news2.gif',1)"><img src="images/menu_news.gif" alt="news" name="Image9" width="51" height="25" border="0" id="Image9" /></a><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','images/menu_news2.gif',1)"></a><img src="images/menu_separator.gif" width="2" height="25" /><a href="change_password.php?idd=<?= $baca["kode_karyawan"] ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','images/menu_change_pass2.gif',1)"><img src="images/menu_change_pass.gif" alt="change pasasword" name="Image10" width="128" height="25" border="0" id="Image10" /></a><a href="news.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/menu_news2.gif',1)"></a><img src="images/menu_separator.gif" width="2" height="25" /><a href="proses_logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image17','','images/menu_logout2.gif',1)"><img src="images/menu_logout.gif" alt="logout" name="Image17" width="64" height="25" border="0" id="Image17" /></a><a href="images/menu_logout.gif" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','images/menu_logout2.gif',1)"></a></div>
</body>
</html>
