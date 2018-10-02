s<?php
include "config/connect.php";

$kode_booking=$_REQUEST["idd"];
mysql_query("delete from tab_booking where kode_booking='$kode_booking'");

$chk=$_POST["chk"];
$jumlah=count($chk);
if(is_array($chk))
{
	foreach($chk as $item)	
		{
		mysql_query("delete from tab_booking where kode_booking='$item'");
		}
mysql_close($con);
}
?><meta http-equiv="refresh" content="0;URL=view_booking_admin.php">