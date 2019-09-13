<?php

$distance_km = rand(3, 180);
$consumption = 11;
$price_l = 0.503;

$fuel_consump = $distance_km / $consumption;
$price_fuel = $fuel_consump * $price_l;

$distance = "Nuvažiuota distancija: $distance_km km.";
$fuel_total = "Sunaudota $fuel_consump l. kuro.";
$price_trip = "Kaina: $price_fuel euro pinigų";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #1</title>
    </head>
    <body>
        <h1>Kelionės skaičiuoklė</h1>
        <ul>
            <li><?php print $distance; ?></li><br>
            <li><?php print $fuel_total; ?></li><br>
            <li><?php print $price_trip; ?></li><br>
        </ul>
    </body>
</html>