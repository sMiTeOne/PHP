<!DOCTYPE html>
<html>
<head>
<title>Палиндромы</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset=utf-8">
</head>

<body>

<?php
if (filter_has_var (INPUT_GET, "string")){
	$string = $_GET ['string'];
	$array = preg_split('//u', $string, null, PREG_SPLIT_NO_EMPTY);
	$lenght = mb_strlen($string, 'UTF-8');
	
for ($i = 0; $i < $lenght; $i++){
	if ($array[$i] != $array[$lenght - 1 - $i]){
		$palindrome = $palindrome + 1;
	}
}

if ($palindrome == 0){
	echo "$string";
}
else{
	echo "$string";
	for ($i = $lenght - 2; $i > -1; $i--){
		echo "$array[$i]";
	}
}
}
else
{
	print <<< HERE
	<form method = "get" action = "">
	<fieldset>
	<p>Введите последовательность символов: </p>
	<input type = "text" name = "string"><br>
	<br><input type = "submit">
	</fieldset>
	</form>
HERE;
}
?>

</body>
</html>