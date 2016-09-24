<!DOCTYPE html>
<html>
<head>
<META HTTP_EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
</head>

<body>

<?php 
if ($_POST['add']){
	$conn = mysql_connect('localhost:3306', 'root', '') or die (mysql_error());
	mysql_select_db("php7", $conn);
	$result = mysql_query("SELECT * FROM phonelist", $conn);
	$id = mysql_num_rows($result);
	$date = date("Y-m-d");  
$sql = <<< HERE
INSERT INTO `php7`.`phonelist` (`id`, `firstName`, `lastName`, `birthDay`, `email`, `phone`) 
VALUES ('$id', NULL, NULL, '$date', NULL, NULL);
HERE;
$result = mysql_query($sql) or die(mysql_error());
header ('Location: showTableHTML.php');
}
if ($_POST['save'])
{
	$conn = mysql_connect('localhost:3306', 'root', '') or die (mysql_error());
	mysql_select_db("php7", $conn);
	$result = mysql_query("SELECT * FROM phoneList", $conn);
	$num = mysql_num_rows($result);
	for ($i = 0; $i < $num; $i++){
		$firstName[$i] = $_POST[firstName.$i];
		$lastName[$i] = $_POST[lastName.$i];
		$birthDay[$i] = $_POST[birthDay.$i];
		$email[$i] = $_POST[email.$i];
		$phone[$i] = $_POST[phone.$i];
	}
for ($i = 0; $i < $num; $i++){
$sql = <<< HERE
UPDATE phoneList
SET
firstName = '$firstName[$i]', 
lastName = '$lastName[$i]', 
birthDay = '$birthDay[$i]', 
email = '$email[$i]',
phone = '$phone[$i]'
WHERE
id = $i;
HERE;
$result = mysql_query($sql) or die(mysql_error());
header ('Location: ShowTableHTML.php');
}
}
?>
</body>
</html>