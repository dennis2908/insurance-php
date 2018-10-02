<?php
	require_once("config/connect.php");
	require_once("functions.php");
$kode_sfa=$_GET["id"];
$type_contact=$_POST["type_contact"];
$name=$_POST["name"];
$address=$_POST["address"];
$company_address=$_POST["company_address"];
$phone=$_POST["phone"];
$mobile_phone=$_POST["mobile_phone"];
$email=$_POST["email"];
$company=$_POST["company"];
$source=$_POST["source"];
$dd=$_POST["dd"];
$mm=$_POST["mm"];
$yy=$_POST["yy"];
$tgl = "$yy-$mm-$dd";
$fact=$_POST["fact"];
$follow_up=$_POST["follow_up"];
$sql="update mscontact SET type_contact='$type_contact',name='$name',address='$address',phone='$phone',mobile_phone='$mobile_phone',email='$email',company='$company',company_address='$company_address',source='$source',tgl='$tgl',fact='$fact',follow_up='$follow_up' where kode_sfa='$kode_sfa'";
mysql_query($sql);//langsung masuk ke database
mysql_close($con);
?>
<meta http-equiv="refresh" content="0;url=contact.php">