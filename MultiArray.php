<!DOCTYPE html>
<html>
<head>
<META HTTP_EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>Distance Calculator</title>
</head>

<body>
<h1>Расчет расстояния (в милях)</h1>

<?php
$cityName = array(
"Indiapolis" => "Индиаполис",
"New York" => "Нью-Йорк",
"Tokyo" => "Токио", 
"London" => "Лондон");

$indy = array(
"Indiapolis" => 0,
"New York" => 648,
"Tokyo" => 6476, 
"London" => 4000);

$ny = array(
"Indiapolis" => 648,
"New York" => 0,
"Tokyo" => 6760, 
"London" => 3470);

$tokyo = array(
"Indiapolis" => 6476,
"New York" => 6760,
"Tokyo" => 0, 
"London" => 5956);

$london = array(
"Indiapolis" => 4000,
"New York" => 3470,
"Tokyo" => 5956, 
"London" => 0);

$distance = array(
"Indiapolis" => $indy,
"New York" => $ny,
"Tokyo" => $tokyo, 
"London" => $london);

$cityA = filter_input(INPUT_POST, "cityA");
$cityB = filter_input(INPUT_POST, "cityB");

$fromCity = $cityName[$cityA];
$toCity = $cityName[$cityB];

$result = $distance[$cityA][$cityB];

print "<h2>Расстояние между городами $fromCity и $toCity составляет $result миль</h2>";
?>

</body>
</html>