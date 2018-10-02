<?php
include "config/connect.php";
$nama_berita=$_POST["nama_berita"];
$start_date=$_POST["start_date"];
$end_date=$_POST["end_date"];
$dedicated=$_POST["dedicated"];
$content=$_POST["content"];

$rs = mysql_query("select kode_berita from tab_berita order by kode_berita desc limit 0,1");
			$baca = mysql_fetch_array($rs);
			$last_code = $baca [0];
			if($last_code=="") $kode_berita = "brt0001";
				else{
				 $angka = substr($last_code,-4);
				 $angka++;
				 $kode_berita = sprintf("brt%04d",$angka);
}
$sql="insert into tab_berita values ('$kode_berita','$nama_berita','$start_date','$end_date','$dedicated','$content')";
$rs=mysql_query($sql);
mysql_query($sql);//langsung masuk ke database
mysql_close($con);
?>
<meta http-equiv="refresh" content="0;URL=news_admin.php">
