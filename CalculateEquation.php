<!DOCTYPE html>
<html>
<head>
<title>Вычисление</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset=utf-8">
</head>

<body>
<h1>Вычисление уравнения типа:</h1>
<img src="https://raw.githubusercontent.com/sMiTeOne/PHP/master/CalculateEquation.png">

<?php
if (filter_has_var (INPUT_GET, "n"))
{
	$n = $_GET ['n'];
	$b = 1;
	for($i = 1; $i < $n + 1; $i++){
		$a = 1 + (1 / pow($i, 2));
		$b = $a * $b;
	}
	echo "<br>Ответ: $b";
}
else
{
	print <<< HERE
	<form method = "get" action = "">
	<fieldset>
	<p>Введите значение n:</p>
	<input type = "text" name = "n" value = ""><br>
	<br><input type = "submit">
	</fieldset>
	</form>
HERE;
}
?>

</body>
</html>
