<!DOCTYPE html>
<html>
<head>
<title>Вывод</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
</head>



<body>
<h1>Результат:</h1>
<div style = "text-align: center">

<?php 
date_default_timezone_set('Europe/Moscow');
$basicText = $_POST['basicText'];
$borderSize = $_POST['borderSize'];
$borderColorR = $_POST['borderColorR'];
$borderColorG = $_POST['borderColorG'];
$borderColorB = $_POST['borderColorB'];
$sizeType = filter_input(INPUT_POST, "sizeType");
$borderStyle = filter_input(INPUT_POST, "borderStyle");

$Style =<<<HERE
"border: $borderSize$sizeType $borderStyle rgb($borderColorR,$borderColorG,$borderColorB)"
HERE;

echo "<div style=$Style>";
echo $basicText;
echo "</div>";

?>

</div>
</body>
</html>