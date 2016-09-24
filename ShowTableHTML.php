<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Показ таблиц</title>
</head>

<body>
<center><h1>Телефонный справочник</h1>
<form method = "post" action = "UpdateTable.php">
<table border="1">
<?php
$conn = mysql_connect('localhost:3306', 'root', '') or die (mysql_error());
mysql_select_db("php7", $conn);
$sql = "SELECT * FROM phoneList";
$result = mysql_query($sql, $conn) or die (mysql_errno());
$row = mysql_fetch_assoc($result);
foreach($row as $name => $value) {
    print "<th>$name</th>";
}
print '</tr>';
while($row) {
    print '<tr>';
    foreach($row as $name => $value) {
		if ($name != 'id'){
			$i = $row['id'];
			print "<td><input type='text' name='$name$i' value='$value'></td>";
		}
		else{
			print "<td>$value</td>";
		}
    }
    print '</tr>';
    $row = mysql_fetch_assoc($result);
}
?>
</table>
<br>
<input type= 'submit' name = 'save' value= 'Сохранить'>
<input type= 'submit' name = 'add' value= 'Добавить новую запись'>
</center>
</form>
</body>
</html>