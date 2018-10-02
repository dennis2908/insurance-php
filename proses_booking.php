<?php session_start();
include "config/connect.php";
$ruang= $_POST["ruang"];
$hh = $_POST["hh"];
$dd = $_POST["dd"];
$mm = $_POST["mm"];
$kode_karyawan = $_POST["kode_karyawan"];


$rs = mysql_query("select kode_booking from tab_booking order by kode_booking desc limit 0,1");
			$baca = mysql_fetch_array($rs);
			$last_code = $baca [0];
			if($last_code=="") $kode_booking = "bok0001";
				else{
				 $angka = substr($last_code,-4);
				 $angka++;
				 $kode_booking = sprintf("bok%04d",$angka);
}
$sql="insert into tab_booking values ('$ruang','$hh','$dd','$mm','$kode_karyawan','$kode_booking')";
$rs=mysql_query($sql);
mysql_query($sql);//langsung masuk ke database
mysql_close($con);
?>
<meta http-equiv="refresh" content="0;URL=view_booking.php">
