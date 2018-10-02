<?php
include "config/connect.php";

$kode_berita=$_REQUEST["idd"];
mysql_query("delete from tab_berita where kode_berita='$kode_berita'");

$chk=$_POST["chk"];
$jumlah=count($chk);
if(is_array($chk))
{
	foreach($chk as $item)	
		{
		mysql_query("delete from tab_berita where kode_berita='$item'");
		}
mysql_close($con);
}
?><meta http-equiv="refresh" content="0;URL=news_admin.php">