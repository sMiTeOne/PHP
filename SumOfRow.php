<!DOCTYPE html>
<html>
<head>
<title>Вычисление</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset=utf-8">
</head>

<body>

<?php
if ((filter_has_var (INPUT_GET, "m")) && (filter_has_var (INPUT_GET, "m")))
{
	$m = $_GET ['m'];
	$n = $_GET ['n'];
	echo "Матрица:<br>";
	for($i = 1; $i < $m + 1; $i++){
		for($j = 1; $j < $n + 1; $j++){
			$arr = $i * 10 + $j;
			$matrix[$arr] = rand(1,100);
			$current = $current + $matrix[$arr];
			echo " $matrix[$arr] ";
		}		
		if ($current > $max){
			$max = $current;
		}
		$current = 0;
		echo "<br>";
	}
	echo "Ответ: $max";
}
else
{
	print <<< HERE
	<form method = "get">
	<fieldset>
	<p>Введите значение m: </p>
	<input type = "text" name = "m" maxlength = 1><br>
	<p><br>Введите значение n: </p>
	<input type = "text" name = "n" maxlength = 1><br>
	<br><input type = "submit">
	</fieldset>
	</form>
HERE;
}
?>

</body>
</html>