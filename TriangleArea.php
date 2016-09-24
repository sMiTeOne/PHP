<!DOCTYPE html>
<html>
<head>
<title>Площадь треугольника</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset=utf-8">
</head>

<body>

<?php
date_default_timezone_set('Europe/Moscow');
if (filter_has_var(INPUT_GET, "calculate"))
{
$a1 = $_GET[a1];
$b1 = $_GET[b1];
$c1 = $_GET[c1];
$a2 = $_GET[a2];
$b2 = $_GET[b2];
$c2 = $_GET[c2];

echo "Координаты треугольника:<br/>";
echo "A($a1, $a2)<br/>";
echo "B($b1, $b2)<br/>";
echo "C($c1, $c2)<br/><br/>";

$p = sqrt(pow($a1 - $a2, 2) + pow($b1 - $b2, 2) + pow($c1 - $c2, 2));
echo "Полупериметр: $p<br/>";
$area = abs(($a1 - $c1)*($b2 - $c2) - ($b1 - $c1)*($a2 - $c2))/2;
echo "Площадь: $area";
}
else
{
	print <<< HERE
	<h1>Площадь треугольника</h1>
	<form method="get">
	a<sub>1</sub>: <input type="text" name="a1"> a<sub>2</sub>: <input type="text" name="a2"><br>
	<br>b<sub>1</sub>: <input type="text" name="b1"> b<sub>2</sub>: <input type="text" name="b2"><br>
	<br>c<sub>1</sub>: <input type="text" name="c1"> c<sub>2</sub>: <input type="text" name="c2"><br>
	<br><input type="submit" name="calculate"><br>
	</form>
HERE;
}
?>

</body>
</html>