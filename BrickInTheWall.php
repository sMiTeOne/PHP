<!DOCTYPE html>
<html>
<head>
<META HTTP_EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
</head>

<body>

<?php 
if (filter_has_var (INPUT_GET, "calculate"))
{
$a = $_POST[a];
$b = $_POST[b];
$c = $_POST[c];
$x = $_POST[x];
$y = $_POST[y];
if ($a <= $x && $b <= $y || $a <= $y && $b <= $x)
{
	echo "кирпич со сторонами a = $a и b = $b сможет пройти в отверстие x = $x и y = $y";
}
else
{
if ($b <= $x && $c <= $y || $b <= $y && $c <= $x)
{
	echo "кирпич со сторонами b = $b и c = $c сможет пройти в отверстие x = $x и y = $y";
}
else
{
if ($a <= $x && $c <= $y || $a <= $y && $c <= $x)
{
	echo "кирпич со сторонами a = $a и c = $c сможет пройти в отверстие x = $x и y = $y";
}
else
{
echo "Это не возможно сделать!";
}
}}}
else
{
	print <<< HERE
	<img src = "https://raw.githubusercontent.com/sMiTeOne/PHP/master/BrickInTheWall.png">

	<form method="POST" action="block.php">
	<h3>Введите стороны кирпича:</h3>
	<br>a: <input type="text" name="a"><br>
	<br>b: <input type="text" name="b"><br>
	<br>c: <input type="text" name="c"><br>

	<h3>Введите стороны отверстия:</h3>
	<br>x: <input type="text" name="x"><br>
	<br>y: <input type="text" name="y"><br>
	<br><input type="submit" name="calculate"><br>
HERE;
}
?>

</body>
</html>

