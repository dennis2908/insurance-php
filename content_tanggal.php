<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
	define ("sehari",(60*60*24));
	if(!checkdate($_POST['month'],1,$_POST['year'])){
		$nowArray = getdate();
		$month = $nowArray ['mon'];
		$year = $nowArray ['year'];
	}else {
		$month = $_POST['month'];
		$year = $_POST['year'];
	}
	$start = mktime (12, 0, 0, $month, 1, $year);
	$firstDayArray = getdate ($start);
?>
<html>
<head>
<title>
<?php echo "kelender : ".$firstDayArray['month']." ".$firstDayArray['year']?></title>
<head>

<body>
	<form method="post" action="<?php echo "$_SERVER[PHP_SELF]";?>">
		<select name="month">
			<?php
				$months = Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
				for($x=1;$x<=count($months);$x++){
					echo "<option value = \"$x\"";
					if($x == $month){
						echo "selected";
					}
					echo ">".$months[$x-1]."";
				}
			?>
		</select>
		<select name="year">
			<?php
				for($x=1990; $x<=2020; $x++){
					echo "<option";
					if($x == $year){
						echo " selected";
					}
					echo ">$x";
				}
			?>
		</select>
		<input type="submit" value="Go !">
	</form>
	<?php
		$days = Array ("Mg","Se","Sl","Ra","Ka","Ju","Sa");
		echo "<table border=0 cellpadding=0><tr>";
		foreach ($days as $day) {
			echo "<td bgcolor =\"#CCCCCC\" align=center>
			<b>$day</b></td>";			
		}
		
		for ($i=0; $i<(6*7);$i++){
			$dayArray = getdate($start);
			if (($i % 7) == 0){
				if($dayArray['mon'] != $month){
					break;
				}else{
					echo "</tr><tr>";
				}
			}
			if($i < $firstDayArray['wday'] || $dayArray['mon'] != $month){
				echo "<td>&nbsp;</td>";
			}else {
				if($dayArray['mday'] == date("d") && $dayArray['mon'] == date("m") && $dayArray['year'] == date("Y") )
					echo "<td bgcolor = \"#FF0000\" align=center ><b>".$dayArray['mday']."&nbsp;&nbsp;</b></td>";
				else
					echo "<td>".$dayArray['mday']."&nbsp;&nbsp;</td>";
				$start += sehari;
			}
		}
		echo "</tr></table>"
	?>
</body>
</html>