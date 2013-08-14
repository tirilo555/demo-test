<?php
header('Content-Type: text/html; charset=UTF-8');
	$err="";
	if(($_POST[h])&&($_POST[c])){
		$h=$_POST[h];
		$c=$_POST[c];
		$c=1*str_replace(',' ,'.' ,$c);
		$h=1*str_replace(',' ,'.' ,$h);
		if(($h==0)||($c==0)){
			$err="Ви не ввели число!";
		}else{
			$R=($h/2)+(pow($c, 2)/(8*$h));
			$a=2*asin($c/(2*$R))."<br>";
			$L=$a*$R;
		}
	}
	echo "<span style='color: red;'>".$err."</span><br>";
?>

<form action="ss.php" method="POST">
<label>Введіть "h" - висоту сегменту, м</label>
<input type="text" name="h">
<label>Введіть "с" -  довжину хорди, м</label>
<input type="text" name="c">
<input type="submit" value="Розрахувати">
</form>
<div>
Довжина сегменту "L" становить : <?=$L?> м.
</div>