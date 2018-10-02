<?php
	require_once("config/connect.php");
	require_once("functions.php");
$kode_berita=$_GET["id"];
$nama_berita=$_POST["nama_berita"];
$start_date=$_POST["start_date"];
$end_date=$_POST["end_date"];
$dedicated=$_POST["dedicated"];
$content=$_POST["content"];
$sql="update tab_berita SET nama_berita='$nama_berita',start_date='$start_date',end_date='$end_date',dedicated='$dedicated',content='$content' where kode_berita='$kode_berita'";
mysql_query($sql);//langsung masuk ke database
mysql_close($con);
?>
<meta http-equiv="refresh" content="0;url=news_admin.php">