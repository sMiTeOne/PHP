<!DOCTYPE html>
<html>
<head>
   <title>Таблица элементов</title>
   <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
</head>

<body>
<h1><center>Таблица до сортировки</center></h1>
<table align = "center" border = "1">
<tr align = "center" bgcolor = #64C1FF><td>Элемент</td><td>Удельная масса</td><td>Проводимость</td><td>Тип</td></tr>
<?php
date_default_timezone_set('europe/moscow');
$theData = file("ConductivityTable.dat");
foreach($theData as $line){
	$line = iconv("windows-1251", "UTF-8", $line);
	list($name, $weight, $conduction, $type) = explode("\t", $line);
	$table = <<< HERE
	<tr align = "center">
    <td>$name</td><td>$weight</td><td>$conduction</td><td>$type</td>
	</tr>
HERE;
print "$table";
}
print "<table align = center border = 1><tr align = center bgcolor = #64C1FF><td>Элемент</td><td>Удельная масса</td><td>Проводимость</td><td>Тип</td></tr>";

for($i = 0; $i < count($theData); $i++){
	$theData[$i] = rtrim($theData[$i]);
	$theData[$i] = iconv("windows-1251", "UTF-8", $theData[$i]);
	list($name, $weight, $conduction, $type) = explode("\t", $theData[$i]);	
	$aname[$i] = $name;
	$aweight[$i] = $weight;
	$rsort[$i] = $weight;
	$aconduction[$i] = $conduction;
	$atype[$i] = $type;
}

rsort($rsort);

for($j = 0; $j < count($theData); $j++){
	for($i = 0; $i < count($theData); $i++){
		if($rsort[$j] == $aweight[$i] && $atype[$i] == "Проводник"){
			print "<tr align = center><td>$aname[$i]</td><td>$rsort[$j]</td><td>$aconduction[$i]</td><td>$atype[$i]</td></tr>";
		}
	}
}
print "<h1><center>Таблица после сортировки</center></h1>";
?>
</table>
</body>
</html>	  